<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        // Convert existing plain text values to JSON translations with default locale 'cs'
        DB::table('faqs')->orderBy('id')->chunkById(100, function ($faqs) {
            foreach ($faqs as $faq) {
                $updates = [];

                // Helper: detect if column is already JSON with a locale map
                $toArray = function ($value) {
                    if (! is_string($value)) {
                        return null;
                    }
                    $decoded = json_decode($value, true);
                    return is_array($decoded) ? $decoded : null;
                };

                // Question
                $questionArr = $toArray($faq->question);
                if (! $questionArr || ! array_key_exists('cs', $questionArr)) {
                    $updates['question'] = json_encode([
                        'cs' => is_string($faq->question) ? $faq->question : '',
                    ], JSON_UNESCAPED_UNICODE);
                }

                // Answer
                $answerArr = $toArray($faq->answer);
                if (! $answerArr || ! array_key_exists('cs', $answerArr)) {
                    $updates['answer'] = json_encode([
                        'cs' => is_string($faq->answer) ? $faq->answer : '',
                    ], JSON_UNESCAPED_UNICODE);
                }

                if (! empty($updates)) {
                    DB::table('faqs')->where('id', $faq->id)->update($updates);
                }
            }
        });
    }

    public function down(): void
    {
        // Revert JSON translations back to plain text using 'cs' locale when available
        DB::table('faqs')->orderBy('id')->chunkById(100, function ($faqs) {
            foreach ($faqs as $faq) {
                $updates = [];

                $toArray = function ($value) {
                    if (! is_string($value)) {
                        return null;
                    }
                    $decoded = json_decode($value, true);
                    return is_array($decoded) ? $decoded : null;
                };

                $questionArr = $toArray($faq->question);
                if ($questionArr) {
                    $updates['question'] = (string) ($questionArr['cs'] ?? reset($questionArr) ?? '');
                }

                $answerArr = $toArray($faq->answer);
                if ($answerArr) {
                    $updates['answer'] = (string) ($answerArr['cs'] ?? reset($answerArr) ?? '');
                }

                if (! empty($updates)) {
                    DB::table('faqs')->where('id', $faq->id)->update($updates);
                }
            }
        });
    }
};
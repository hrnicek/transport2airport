<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Add English translations to existing FAQ records
        $translations = [
            1 => [
                'question' => 'Where do you travel from and to?',
                'answer' => 'We primarily travel from Olomouc and surrounding areas to airports: Vienna, Prague, Ostrava, Brno, Katowice and Bratislava. We can also arrange other destinations upon request.'
            ],
            2 => [
                'question' => 'How can I book transportation?',
                'answer' => 'You can easily book by phone, email or contact form on the website. We recommend booking at least 24 hours in advance.'
            ],
            3 => [
                'question' => 'How much does airport transportation cost?',
                'answer' => 'The price depends on the destination airport and number of people. You can find the exact price list on our website or we will tell you the price when ordering.'
            ],
            4 => [
                'question' => 'Is it possible to pay by card?',
                'answer' => 'Yes, we offer the possibility of payment in cash and by payment card. For corporate customers also by invoice.'
            ],
            5 => [
                'question' => 'How many people fit in the car?',
                'answer' => 'We use modern and spacious cars (Citroën Spacetourer) with a capacity of up to 8 people + luggage.'
            ],
            6 => [
                'question' => 'Will you pick me up at home?',
                'answer' => 'Yes, we will pick you up directly at the specified address and transport you to the departure hall of the airport.'
            ],
            7 => [
                'question' => 'What if the flight is delayed?',
                'answer' => 'We monitor flights online - we adjust departure and arrival times according to the current situation.'
            ],
            8 => [
                'question' => 'Do you also provide return transportation?',
                'answer' => 'Yes, just book the trip from the airport as well. The driver will pick you up in the arrival hall with a sign with your name.'
            ],
            9 => [
                'question' => 'Is it possible to travel with children?',
                'answer' => 'Of course, we have child seats and booster seats available. Just report it when booking.'
            ],
            10 => [
                'question' => 'How big luggage can I take?',
                'answer' => 'Normally one large and one carry-on luggage per person fits. A larger number of suitcases can be arranged in advance.'
            ],
            11 => [
                'question' => 'Do you also offer individual (private) transportation?',
                'answer' => 'Yes, you can also order a private transfer, where the car goes only for you and your loved ones.'
            ],
            12 => [
                'question' => 'What if I need to cancel my reservation?',
                'answer' => 'You can cancel your reservation free of charge up to 24 hours before departure. For later cancellation we charge a cancellation fee.'
            ]
        ];

        foreach ($translations as $order => $translation) {
            $faq = DB::table('faqs')->where('order_column', $order)->first();
            if ($faq) {
                // Decode existing JSON
                $questionData = json_decode($faq->question, true) ?: [];
                $answerData = json_decode($faq->answer, true) ?: [];
                
                // Add English translations
                $questionData['en'] = $translation['question'];
                $answerData['en'] = $translation['answer'];
                
                // Update the record
                DB::table('faqs')->where('id', $faq->id)->update([
                    'question' => json_encode($questionData, JSON_UNESCAPED_UNICODE),
                    'answer' => json_encode($answerData, JSON_UNESCAPED_UNICODE)
                ]);
            }
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Remove English translations from FAQs
        for ($i = 1; $i <= 12; $i++) {
            $faq = DB::table('faqs')->where('order_column', $i)->first();
            if ($faq) {
                $question = json_decode($faq->question, true);
                $answer = json_decode($faq->answer, true);
                
                // Keep only Czech translations
                if (isset($question['cs']) && isset($answer['cs'])) {
                    DB::table('faqs')->where('order_column', $i)->update([
                        'question' => json_encode(['cs' => $question['cs']]),
                        'answer' => json_encode(['cs' => $answer['cs']])
                    ]);
                }
            }
        }
    }
};

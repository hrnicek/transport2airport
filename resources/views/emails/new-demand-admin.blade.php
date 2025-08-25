<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nová poptávka</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .content {
            background-color: #ffffff;
            padding: 20px;
            border: 1px solid #e9ecef;
            border-radius: 8px;
        }
        .detail-row {
            display: flex;
            margin-bottom: 10px;
            padding: 8px 0;
            border-bottom: 1px solid #f1f3f4;
        }
        .detail-label {
            font-weight: bold;
            width: 120px;
            color: #495057;
        }
        .detail-value {
            flex: 1;
        }
        .route {
            font-size: 18px;
            font-weight: bold;
            color: #007bff;
            margin-bottom: 15px;
        }
        .note {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Nová poptávka dopravy</h1>
        <p>Byla vytvořena nová poptávka na webu.</p>
    </div>

    <div class="content">
        <div class="route">
            {{ $demand->from }} → {{ $demand->to }}
        </div>

        <div class="detail-row">
            <div class="detail-label">Datum:</div>
            <div class="detail-value">{{ $demand->date->format('d.m.Y') }}</div>
        </div>

        <div class="detail-row">
            <div class="detail-label">Počet osob:</div>
            <div class="detail-value">{{ $demand->people }}</div>
        </div>

        <div class="detail-row">
            <div class="detail-label">Email:</div>
            <div class="detail-value">{{ $demand->email }}</div>
        </div>

        <div class="detail-row">
            <div class="detail-label">Telefon:</div>
            <div class="detail-value">{{ $demand->phone }}</div>
        </div>

        <div class="detail-row">
            <div class="detail-label">Letiště:</div>
            <div class="detail-value">{{ $demand->airport ? 'Ano' : 'Ne' }}</div>
        </div>

        <div class="detail-row">
            <div class="detail-label">Stav:</div>
            <div class="detail-value">{{ ucfirst($demand->status) }}</div>
        </div>

        <div class="detail-row">
            <div class="detail-label">Vytvořeno:</div>
            <div class="detail-value">{{ $demand->created_at->format('d.m.Y H:i') }}</div>
        </div>

        @if($demand->note)
            <div class="note">
                <strong>Poznámka:</strong><br>
                {{ $demand->note }}
            </div>
        @endif
    </div>
</body>
</html>
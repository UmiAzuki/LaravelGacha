<!DOCTYPE html>
<html>
<head>
    <title>Random Item</title>
</head>
<body>
@csrf
    <h1>Randomly Selected Item:</h1>
    @if ($item)
        @if (request()->input('gacha_type') === '1')
            <p>{{ $item->card_name }}</p>
        @endif

        @if (request()->input('gacha_type') === '10')
            @foreach ($response['gachaResult'] as $i => $card)
            <p>{{ $card->card_name }}</p>
            @endforeach
        @endif
    @else
        <p>No items found.</p>
    @endif
</body>
</html>

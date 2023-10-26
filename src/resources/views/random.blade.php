<!DOCTYPE html>
<html>
<head>
    <title>Random Item</title>
</head>
<body>
    <h1>Randomly Selected Item:</h1>
    @if ($item)
        <p>{{ $item->card_name }}</p>
    @else
        <p>No items found.</p>
    @endif
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Asset Selector</title>
    <style>
        .hidden {
            display: none;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div>
        <input type="radio" id="Crypto2" name="asset_type2" class="asset_type2" value="Crypto">
        <label class="text-light" for="Crypto2">Crypto</label>
    </div>
    <div>
        <input type="radio" id="Forex2" name="asset_type2" class="asset_type2" value="Forex">
        <label class="text-light" for="Forex2">Forex</label>
    </div>
    <div>
        <input type="radio" id="Stocks2" name="asset_type2" class="asset_type2" value="Stocks">
        <label class="text-light" for="Stocks2">Stocks</label>
    </div>
    <div>
        <input type="radio" id="Commodities2" name="asset_type2" class="asset_type2" value="Commodities">
        <label class="text-light" for="Commodities2">Commodities</label>
    </div>

    <select id="assets"></select>

    <select id="hidden-assets" class="hidden">
        @foreach ($assets as $asset)
            <option class="asset_crypto" value="{{ $asset->symbol }}">{{ $asset->name }}</option>
        @endforeach

        <option class="asset_stocks" value="AAPL">Apple Inc.</option>
        <option class="asset_stocks" value="MSFT">Microsoft Corp</option>
        
        <option class="asset_commodities" value="XAG">SILVER</option>
        <option class="asset_commodities" value="ZLH23">Soybean Oil</option>

        <option class="asset_forex" value="GBP/USD">GBP/USD</option>
        <option class="asset_forex" value="USD/CAD">USD/CAD</option>
    </select>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            function updateAssetOptions(selectedValue) {
                console.log('Selected value:', selectedValue);
                
                // Clear the visible select box
                $('#assets').empty();
                
                // Append the relevant options based on the selected value
                if (selectedValue === 'Crypto') {
                    $('#hidden-assets .asset_crypto').clone().appendTo('#assets');
                    console.log('Showing Crypto options');
                } else if (selectedValue === 'Stocks') {
                    $('#hidden-assets .asset_stocks').clone().appendTo('#assets');
                    console.log('Showing Stocks options');
                } else if (selectedValue === 'Forex') {
                    $('#hidden-assets .asset_forex').clone().appendTo('#assets');
                    console.log('Showing Forex options');
                } else if (selectedValue === 'Commodities') {
                    $('#hidden-assets .asset_commodities').clone().appendTo('#assets');
                    console.log('Showing Commodities options');
                }
            }

            // Bind change event to radio buttons
            $(".asset_type2").on('change', function() {
                updateAssetOptions(this.value);
            });

            // Check the initially selected radio button and update the asset options
            var initiallySelected = $('input[name="asset_type2"]:checked').val();
            if (initiallySelected) {
                updateAssetOptions(initiallySelected);
            } else {
                // If no radio button is selected initially, select the first one and update options
                $('input[name="asset_type2"]').first().prop('checked', true);
                updateAssetOptions($('input[name="asset_type2"]').first().val());
            }
        });
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAG 4</title>
    <style>
        @font-face {
            font-family: 'Daniela';
            src: url("{{ asset('assets/fonts/daniela.ttf') }}") format('truetype');
            font-weight: bold;
            font-style: normal;
        }

        @font-face {
            font-family: 'FuturaBold';
            src: url("{{ asset('assets/fonts/FuturaBoldCondensedBT.ttf') }}") format('truetype');
            font-weight: bold;
            font-style: normal;
        }

        body {
            margin: 0px !important;
        }
 
        .tag-4 .logo-text {
            display: flex;
            justify-content: center;
            margin-top: 15px;
        }

        .tag-4 .logo-text img {
            height: 70px;
        }

        .tag-4 .logo-text h1 {
            font-family: 'FuturaBold';
            color: #fff;
            font-size: 32px;
            margin: 0px;
            text-align: start;
        }

        .tag-4 .logo-sub-text {
            text-align: end;
            font-family: 'Trajan';
            font-size: 21px;
            color: white;
            margin-bottom: 0px;
            margin-top: -20px;
            margin-right: 14px;
        }

        .tag-4 .contact-info {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 5px; 
        }

        .tag-4 .contact-info p {
            font-family: 'FuturaBold';
            margin: 0px;
            color: #fff;
            font-size: 23px;
        }

        .tag-4 .contact-info img {
            height: 19px;
        }

        .tag-4 {
            display: -webkit-box;
            display: flex;
            width: 920px;
        }

        .tag-4 .fixed-div {
            height: 139px;
            border-radius: 25px;
        }

        .tag-4 .first {
            width: 292px;
            max-width: 292px;
            background-color: #7e335e;
            text-align: center;
            position: relative;
        }

        .tag-4 .second {
            max-width: 292px;
            width: 292px;
            background-color: #ffffff;
            border: 1px solid #7e335e;
        }

        .tag-4 .second .titlediv {
            display: -webkit-box;
            display: flex;
            align-items: center;
            margin-left: 78px;
            margin-top: 5px;
            width: 100%;
            font-weight: 600;
        }

        .tag-4 .second .titlediv img {
            height: 18px;
            margin: 0px 2px;
        }

        .tag-4 .second .second-title {
            font-family: 'FuturaBold';
            text-align: center;
            margin: 0px;
            font-size: 20px;
        }

        .tag-4 .second .title-field {
            display: -webkit-box;
            display: flex;
            align-items: center;
        }

        .tag-4 .second .title-field p {
            font-family: 'FuturaBold';
            margin: 0px;
            margin-left: 5px;
            font-weight: 600;
            font-size: 20px;
        }

        .tag-4 .dotted-border {
            width: 240px;
            height: 20px;
            border-bottom: 3px dotted black;
        }

        .tag-4 .field-1st {
            margin-top: 20px;
            margin-bottom: 30px;
        }

        .tag-4 .third {
            display: -webkit-box;
            display: flex;
            width: 336px;
            max-width: 336px;
            background-color: white;
        }

        .tag-4 .third .inner-div {
            border-top: 1px solid #7e335e;
            border-right: 1px solid #7e335e;
            border-bottom: 1px solid #7e335e;
            width: 340px;
            height: 60px;
            margin-left: -1px;
            z-index: 2;
            margin-top: 40px;
            border-top-right-radius: 25px;
            border-bottom-right-radius: 25px;
            background-color: white;
        }
    </style>
</head>

<body>
    <div class="full-container tag-4">
        <div class="fixed-div first">

            <div class="logo-text">
                <img src="/assets/img/dhanlaxmi_logo.png" alt="">
                <div>
                    <h1>SRI DHANLAXMI</h1>
                    <h1>JEWELLERS</h1>
                </div>
               
            </div>

            <div class="contact-info">
                <p>Saurab Kumar</p>
                <img src="/assets/img/whatsapp.png" alt="">
                <p>9636827794</p>
            </div>
        </div>
        <div class="fixed-div second">
            <div class="titlediv">
                <p class="second-title">750</p>
                <img src="/assets/img/Full_Tag_ImgID2.png" alt="">
                <p class="second-title">Jewellery</p>
            </div>

            <div class="title-field field-1st">
                <p>G.Wt</p>
                <div class="dotted-border"></div>
            </div>

            <div class="title-field">
                <p>N.Wt</p>
                <div class="dotted-border"></div>
            </div>
        </div>
        <div class="fixed-div third">
            <div class="inner-div">

            </div>
        </div>
    </div>

    <script>
        function adjustFontAndPosition(elementId) {
            const element = document.getElementById(elementId);
            const textLength = element.textContent.length;

            // Adjust these values as necessary
            const baseFontSize = 43; // Base font size for logos
            const maxLength = 2; // Max length without adjustment
            const scalingFactor = 0.85; // Font scaling factor

            let newFontSize = baseFontSize;
            if (textLength > maxLength) {
                newFontSize *= Math.pow(scalingFactor, textLength - maxLength);
            }
            element.style.fontSize = `${newFontSize - 8}px`;

            // Adjust 'top' based on the number of characters
            switch (textLength) {
                case 1:
                    element.style.top = "24px";
                    break;
                case 2:
                    element.style.top = "26px";
                    break;
                case 3:
                    element.style.top = "29px";
                    break;
                case 4:
                    element.style.top = "32px";
                    break;
                default:
                    element.style.top = "34px"; // Default value or logic for other lengths
            }
        }

        // Run the function when the document loads
        document.addEventListener('DOMContentLoaded', function() {
            adjustFontAndPosition('dynamicFontLogo');
        });

        function adjustFontSize(elementId) {
            const element = document.getElementById(elementId);
            const textLength = element.textContent.length;

            // Base font size and scaling factor may need adjustment
            const baseFontSize = 23; // Your base font size
            const maxLength = 15; // Adjust based on your average or max expected length before breaking
            const scalingFactor = 0.95; // Adjust scaling factor based on testing

            let newFontSize = baseFontSize;
            if (textLength > maxLength) {
                newFontSize *= Math.pow(scalingFactor, textLength - maxLength);
            }

            element.style.fontSize = `${newFontSize+3}px`;
        }

        // Adjust the font size of the div on document load
        document.addEventListener('DOMContentLoaded', function() {
            adjustFontSize('dynamicFontDiv');
        });
    </script>
</body>

</html>

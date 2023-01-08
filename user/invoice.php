<!DOCTYPE html>

<html>

<head>

    <style>
        .bee-page-container{
            margin-top: 20px;
        }
        .bee-row,
        .bee-row-content {
            position: relative
        }

        .bee-row-1 .bee-row-content,
        .bee-row-2 .bee-col-1,
        .bee-row-5 .bee-col-1 {
            border-bottom: 2px solid #000;
            border-left: 2px solid #000;
            border-right: 2px solid #000;
            border-top: 2px solid #000
        }

        .bee-row-1 .bee-col-2,
        .bee-row-1 .bee-col-3,
        .bee-row-3 .bee-col-1,
        .bee-row-3 .bee-col-2,
        .bee-row-4 .bee-col-1,
        .bee-row-6 .bee-col-1 {
            padding-bottom: 5px;
            padding-top: 5px
        }

        body {
            background-color: #fff;
            color: #000;
            font-family: Arial, Helvetica Neue, Helvetica, sans-serif
        }

        .bee-row-4 .bee-col-1 .bee-block-1 a,
        a {
            color: #0068a5
        }

        * {
            box-sizing: border-box
        }

        body,
        h1,
        h2,
        h3,
        p {
            margin: 0
        }

        .bee-row-content {
            max-width: 1090px;
            margin: 0 auto;
            display: flex
        }

        .bee-row-content .bee-col-w1 {
            flex-basis: 8%
        }

        .bee-row-content .bee-col-w4 {
            flex-basis: 33%
        }

        .bee-row-content .bee-col-w11 {
            flex-basis: 92%
        }

        .bee-row-content .bee-col-w12 {
            flex-basis: 100%
        }

        .bee-icon .bee-icon-label-right a {
            text-decoration: none
        }

        .bee-image {
            overflow: auto
        }

        .bee-image .bee-center {
            margin: 0 auto
        }

        .bee-row-1 .bee-col-1 .bee-block-1 {
            width: 100%
        }

        .bee-row-1 .bee-row-content,
        .bee-row-3 .bee-row-content {
            border-radius: 0;
            background-repeat: no-repeat;
            color: #000
        }

        .bee-icon {
            display: inline-block;
            vertical-align: middle
        }

        .bee-icon .bee-content {
            display: flex;
            align-items: center
        }

        .bee-image img {
            display: block;
            width: 100%
        }

        .bee-paragraph {
            overflow-wrap: anywhere
        }

        @media (max-width:768px) {
            .bee-row-content:not(.no_stack) {
                display: block
            }
        }

        .bee-row-1,
        .bee-row-2,
        .bee-row-3,
        .bee-row-4,
        .bee-row-5,
        .bee-row-6 {
            background-repeat: no-repeat
        }

        .bee-row-1 .bee-col-1 {
            padding: 5px
        }

        .bee-row-1 .bee-col-2 .bee-block-1 {
            width: 100%;
            text-align: center;
            padding: 60px
        }

        .bee-row-1 .bee-col-3 {
            padding-right: 15px
        }

        .bee-row-1 .bee-col-3 .bee-block-2,
        .bee-row-1 .bee-col-3 .bee-block-3,
        .bee-row-1 .bee-col-3 .bee-block-4,
        .bee-row-1 .bee-col-3 .bee-block-5,
        .bee-row-2 .bee-col-1 .bee-block-1,
        .bee-row-3 .bee-col-2 .bee-block-1,
        .bee-row-3 .bee-col-2 .bee-block-2,
        .bee-row-3 .bee-col-2 .bee-block-3,
        .bee-row-3 .bee-col-2 .bee-block-4,
        .bee-row-5 .bee-col-1 .bee-block-1 {
            width: 100%;
            text-align: center
        }

        .bee-row-2 .bee-row-content,
        .bee-row-5 .bee-row-content {
            background-color: #23995d;
            color: #000;
            background-repeat: no-repeat;
            border-radius: 0
        }

        .bee-row-2 .bee-col-1,
        .bee-row-5 .bee-col-1 {
            padding-bottom: 5px;
            padding-top: 5px
        }

        .bee-row-4 .bee-row-content,
        .bee-row-6 .bee-row-content {
            background-repeat: no-repeat;
            color: #000
        }

        .bee-row-4 .bee-col-1 .bee-block-1 {
            padding: 10px
        }

        .bee-row-6 .bee-col-1 .bee-block-1 {
            color: #9d9d9d;
            font-family: inherit;
            font-size: 15px;
            padding-bottom: 5px;
            padding-top: 5px;
            text-align: center
        }

        .bee-row-4 .bee-col-1 .bee-block-1 {
            color: #000;
            font-size: 14px;
            font-weight: 400;
            line-height: 120%;
            text-align: justify;
            direction: ltr;
            letter-spacing: 0
        }

        .bee-row-4 .bee-col-1 .bee-block-1 p:not(:last-child) {
            margin-bottom: 16px
        }

        .bee-row-6 .bee-col-1 .bee-block-1 .bee-icon-image {
            padding: 5px 6px 5px 5px
        }

        .bee-row-6 .bee-col-1 .bee-block-1 .bee-icon:not(.bee-icon-first) .bee-content {
            margin-left: 0
        }

        .bee-row-6 .bee-col-1 .bee-block-1 .bee-icon::not(.bee-icon-last) .bee-content {
            margin-right: 0
        }
    </style>
</head>

<body>
    <div class="bee-page-container">
        <div class="bee-row bee-row-1">
            <div class="bee-row-content">
                <div class="bee-col bee-col-1 bee-col-w4">
                    <div class="bee-block bee-block-1 bee-image"><img alt="" class="bee-center bee-fixedwidth" src="http://localhost/jeevani/images/logo.png" style="max-width:158px;" /></div>
                </div>
                <div class="bee-col bee-col-2 bee-col-w4">
                    <div class="bee-block bee-block-1 bee-heading">
                        <h1 style="color:#555555;font-size:23px;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:120%;text-align:center;direction:ltr;font-weight:700;letter-spacing:normal;margin-top:0;margin-bottom:0;">
                            <span class="tinyMce-placeholder">JEEVANI AYURVEDICS</span>
                        </h1>
                    </div>
                </div>
                <div class="bee-col bee-col-3 bee-col-w4">
                    <div class="bee-block bee-block-1 bee-spacer">
                        <div class="spacer" style="height:60px;"></div>
                    </div>
                    <div class="bee-block bee-block-2 bee-heading">
                        <h2 style="color:#555555;font-size:18px;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:120%;text-align:right;direction:ltr;font-weight:700;letter-spacing:normal;margin-top:0;margin-bottom:0;">
                            <span class="tinyMce-placeholder"></span>
                        </h2>
                    </div>
                    <div class="bee-block bee-block-3 bee-heading">
                        <h3 style="color:#555555;font-size:16px;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:120%;text-align:right;direction:ltr;font-weight:700;letter-spacing:normal;margin-top:0;margin-bottom:0;">
                            <span class="tinyMce-placeholder">Doctor Name</span>
                        </h3>
                    </div>
                    <div class="bee-block bee-block-4 bee-heading">
                        <h3 style="color:#555555;font-size:16px;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:120%;text-align:right;direction:ltr;font-weight:700;letter-spacing:normal;margin-top:0;margin-bottom:0;">
                            <span class="tinyMce-placeholder">Chamber Name</span>
                        </h3>
                    </div>
                    <div class="bee-block bee-block-5 bee-heading">
                        <h3 style="color:#555555;font-size:16px;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:120%;text-align:right;direction:ltr;font-weight:700;letter-spacing:normal;margin-top:0;margin-bottom:0;">
                            <span class="tinyMce-placeholder">Adress</span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="bee-row bee-row-2">
            <div class="bee-row-content">
                <div class="bee-col bee-col-1 bee-col-w12">
                    <div class="bee-block bee-block-1 bee-heading">
                        <h1 style="color:#ffffff;font-size:23px;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:120%;text-align:center;direction:ltr;font-weight:700;letter-spacing:normal;margin-top:0;margin-bottom:0;">
                            <span class="tinyMce-placeholder">Patient Details</span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="bee-row bee-row-3">
            <div class="bee-row-content">
                <div class="bee-col bee-col-1 bee-col-w1"></div>
                <div class="bee-col bee-col-2 bee-col-w11">
                    <div class="bee-block bee-block-1 bee-heading">
                        <h3 style="color:#555555;font-size:16px;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:120%;text-align:left;direction:ltr;font-weight:700;letter-spacing:normal;margin-top:0;margin-bottom:0;">
                            <span class="tinyMce-placeholder">Name:​</span>
                        </h3>
                    </div>
                    <div class="bee-block bee-block-2 bee-heading">
                        <h3 style="color:#555555;font-size:16px;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:120%;text-align:left;direction:ltr;font-weight:700;letter-spacing:normal;margin-top:0;margin-bottom:0;">
                            <span class="tinyMce-placeholder">Address:​</span>
                        </h3>
                    </div>
                    <div class="bee-block bee-block-3 bee-heading">
                        <h3 style="color:#555555;font-size:16px;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:120%;text-align:left;direction:ltr;font-weight:700;letter-spacing:normal;margin-top:0;margin-bottom:0;">
                            <span class="tinyMce-placeholder">Gender:​</span>
                        </h3>
                    </div>
                    <div class="bee-block bee-block-4 bee-heading">
                        <h3 style="color:#555555;font-size:16px;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:120%;text-align:left;direction:ltr;font-weight:700;letter-spacing:normal;margin-top:0;margin-bottom:0;">
                            <span class="tinyMce-placeholder">Age:​</span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="bee-row bee-row-4">
            <div class="bee-row-content">
                <div class="bee-col bee-col-1 bee-col-w12">
                    <div class="bee-block bee-block-1 bee-paragraph">
                        <p>Im a new paragraph block.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bee-row bee-row-5">
            <div class="bee-row-content">
                <div class="bee-col bee-col-1 bee-col-w12">
                    <div class="bee-block bee-block-1 bee-heading">
                        <h1 style="color:#ffffff;font-size:23px;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:120%;text-align:center;direction:ltr;font-weight:700;letter-spacing:normal;margin-top:0;margin-bottom:0;">
                            <span class="tinyMce-placeholder">Description</span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
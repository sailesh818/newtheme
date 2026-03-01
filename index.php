<!doctype html>
<html>
<head>
    <title><?php the_title(); ?></title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style type="text/css">
        body {
            background-color: blue;
            margin: 0;
            padding: 0;
            font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
        }

        div {
            width: 600px;
            margin: 5em auto;
            padding: 50px;
            background-color: white;
            border-radius: 1em;
        }

        a:link, a:visited {
            color: blue;
            text-decoration: none;
        }

        @media (max-width: 700px) {
            body {
                background-color: blue;
            }

            div {
                width: auto;
                margin: 0 auto;
                border-radius: 0;
                padding: 1em;
            }
        }
    </style>
</head>

<body>
    <div>
        <h1><?php bloginfo("name"); ?> </h1>
        <h3><?php bloginfo("description"); ?></h3>
        <p>
            This domain is established to be used for illustrative examples in documents.
            You may use this domain in examples without prior coordination or asking for permission.
        </p>
    </div>
</body>
</html>
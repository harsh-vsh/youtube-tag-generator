<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title>Youtube Video Tag Extractor</title>
    <link rel="stylesheet" href="https://technicalinteract.com/tools_data/cdn/tag/style.min.css">
</head>
<body>
    <div class="container py-3">
        <div class="text-center">
            <a style="text-decoration:none" href="#"><h1>Youtube Video Tag Extractor</h1></a>
        </div>
    </div>
    <div class="container my-3">
        <div class="form-group">
            <div class="input-group mb-3">
                <input autocomplete="off" type="text" placeholder="Enter YouTube Video URL eg. https://youtu.be/hkWqOKAZzYo" id="url" class="form-control" aria-label="Amount (to the nearest dollar)">
                <button class="btn btn-primary" type="button" onclick="my()" id="button-addon2">Get Tag</button>
            </div>
        </div>
            <div class="input-area">
            </div>
            <div class="form-group">
                <label for="" class="my-2">Your Tags</label>
                <textarea  type="text" id="tags" class="form-control-url"></textarea>
            </div>
            <div class="form-group text-center my-3">
            <button onclick="myFunction()" class="btn btn-primary">Copy Tags</button>
            </div>
    </div>
<script src="https://technicalinteract.com/tools_data/cdn/tag/crawler.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script type="text/javascript" src="../js/vue.js"></script>
</head>
<body>
<h1>hello world</h1>

<div class="container">
    <div class="content">
        <div class="title">
            <p>@{{ message }}</p>
        </div>
    </div>
</div>
<script type="text/javascript">
    new Vue({
        el: '.title',
        data: {
            message: 'Hello Laravel!'
        }
    })
</script>
</body>
</html>
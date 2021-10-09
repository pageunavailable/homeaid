<html>
    <head>
        <link rel="../css/main.css" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="card-group" id="card-body">
            
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</html>

<script>
    var jq = $.noConflict();
    Load();
    function Load(){
        jq('#card-body').empty();
        jq.ajax({
            url: "http://localhost/myapp/json_tester/functions/list.php",
            type: "GET",
            success: function(response){
                response.forEach(function(categories, index){
                    jq('#card-body').append(`
                        <div class="card center" style="width: 18rem;">
                            <div class="cardimage">
                                <img src='${categories.image}' class="card-img-top">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">${categories.category_name}</h5>
                                <p class="card-text">${categories.description}</p>
                                <a href="#" class="btn btn-tertiary">Go</a>
                            </div>
                            <div class="card-footer text-muted">
                                Users Available: 
                            </div>
                        </div>
                    `);
                });
            }
        });
    }
</script>
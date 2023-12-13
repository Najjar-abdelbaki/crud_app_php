<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="Section_top">

        <div class="container">
            <form action="php/create.php" 
                method="post">
                
            <h4 class="display-4 text-center">Create</h4><hr><br>
            <?php if (isset($_GET['error'])) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_GET['error']; ?>
                </div>
            <?php } ?>
            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="name" 
                    class="form-control" 
                    id="name" 
                    name="name" 
                    value="<?php if(isset($_GET['name']))
                                    echo($_GET['name']); ?>" 
                    placeholder="Enter name">
            </div>

            <div class="form-group">
                <label for="discription">Product discription</label>
                <input type="discription" 
                    class="form-control" 
                    id="discription" 
                    name="discription" 
                    value="<?php if(isset($_GET['discription']))
                                    echo($_GET['discription']); ?>"
                    placeholder="Enter discription">
            </div>

            <div class="form-group">
                <label for="prix">Prix</label>
                <input type="Prix" 
                    class="form-control" 
                    id="prix" 
                    name="prix" 
                    value="<?php if(isset($_GET['prix']))
                                    echo($_GET['prix']); ?>"
                    placeholder="Enter prix">
            </div>

            <div class="form-group">
                <label for="qte">qte</label>
                <input type="qte" 
                    class="form-control" 
                    id="qte" 
                    name="qte" 
                    value="<?php if(isset($_GET['qte']))
                                    echo($_GET['qte']); ?>"
                    placeholder="Enter qte">
            </div>

            <button type="submit" 
                    class="btn btn-primary"
                    name="create">Create</button>
                <a href="read.php" class="link-primary">View</a>
            </form>
        </div>
    </div>
</body>
</html>
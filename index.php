<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Font Awsome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <title>Números Primos</title>
</head>

<style>
    .card{
        width: 400px;
    }
    
    b{
        color:red;
    }
</style>

<body>
    <div class="container-fluid">
        <div class="d-flex justify-content-center">
            <div class="card mt-4 h-100">
                <div class="card-header">
                    <div class="d-flex justify-content-center">
                        <span><i class="fas fa-fw fas fa-sort-numeric-up fa-3x"></i></span>
                        <h5 class="mt-2 ml-2">Números Primos</h5>
                    </div>
                </div>
                <form action="consultar.php" method="post">
                    <div class="card-body">
                        <?php
                            if(isset($_GET["msg"])){?>
                                <div class="alert alert-danger"><?php echo $_GET["msg"]; ?></div>
                        <?php
                            }else if((isset($_GET['status'])) && ($_GET['status'] == "true")){?>
                                <div class="alert text-success"><?php echo "O número ".$_GET['num']." é primo" ?></div>
                        <?php    
                            }else{?>
                                <div class="alert text-danger"><?php echo "O número ".$_GET['num']." não é primo" ?></div>
                        <?php   
                            }
                        ?>
                            <label>Digite o número que deseja verificar se é primo: <b>*</b></label>
                            <input type="text" name="num" class="form-control" required>
                            <p class="mt-2 mb-0">O campo com <b>*</b> é obrigatório</p>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-end">
                            <input type="submit" name="btn" class="btn btn-info" value="Verificar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

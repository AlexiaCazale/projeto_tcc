<?php
    require_once "header.php";
    require_once "footer.php";
?>
    <br><br>
    <h1 class="border">Fatec Jahu</h1>
    <br><br>
    <div class="container">
        <div class="content">
            <h2 class="border">Cursos</h2>
            <br><br>
            <div class="btn-center">
                <a href="addCurso.php"><button>Adicionar curso</button></a> &nbsp; &nbsp;
                <!-- <a href="addDisciplina.php"><button>Adicionar disciplina</button></a> -->
            </div>
            <br>
        </div>
        <br><br>
        <div class="content">
            <h2 class="border">Blocos</h2>
            <br><br>
            <div class="btn-center">
                <a href="addImagem.php"><button>Adicionar blocos</button></a> &nbsp; &nbsp;
            </div>
            <br>
        </div>
        <br><br>
        <div class="content">
            <h2 class="border">Pets</h2>
            <br><br>
            <div class="btn-center">
                <a href="addImagem.php"><button>Adicionar pets</button></a> &nbsp; &nbsp;
            </div>
            <br>
        </div>
    </div>

        
    <style>
       h1{
            font-size: 40px;
            text-align: center;
            /* font-family: "Krona One", sans-serif; */
            font-weight: 800;
            font-style: normal;
            color: white;
            text-transform: uppercase;
        }

        .border{
            background-color: #1b2238;
            padding: 15px;
            border-radius: 8px;
            margin: 0 35%;
            display: flex;
            justify-content: center;
            color: white;
        }

        button{
            background-color: #F2E0A6;
            font-size: 15px;
            padding: 10px;
            border-radius: 6px;
            color: black;
        }

        .btn-center{
            display: flex;
            justify-content: center;
        }

        .content{
            background-color: #1b2238;
            padding: 15px;
            border-radius: 8px;
            margin: 0 15%;
        }

    </style>
</body>
</html>

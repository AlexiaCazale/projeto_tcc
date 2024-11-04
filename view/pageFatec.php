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
            <br>
            <div class="infos">
                <div class="cursos">
                    <h3 class="title">Selecione um curso: </h3>
                    <br>
                    <input type="radio" name="sistemas-para-internet" id="si">
                    <label for="sistemas-para-internet">Construção Naval</label> <br>
                    <input type="radio" name="sistemas-para-internet" id="si">
                    <label for="sistemas-para-internet">Gestão da Produção Industrial</label><br>
                    <input type="radio" name="sistemas-para-internet" id="si">
                    <label for="sistemas-para-internet">Gestão Empresarial</label><br>
                    <input type="radio" name="sistemas-para-internet" id="si">
                    <label for="sistemas-para-internet">Meio Ambiente e Recursos Hídricos</label><br>
                    <input type="radio" name="sistemas-para-internet" id="si">
                    <label for="sistemas-para-internet">Sistemas para Internet</label><br>
                    <input type="radio" name="sistemas-para-internet" id="si">
                    <label for="sistemas-para-internet">Desenvolvimento de Software Multiplataforma</label><br>
                    <input type="radio" name="sistemas-para-internet" id="si">
                    <label for="sistemas-para-internet">Gestão da Tecnologia da Informação</label><br>
                    <input type="radio" name="sistemas-para-internet" id="si">
                    <label for="sistemas-para-internet">Logística</label><br>
                    <input type="radio" name="sistemas-para-internet" id="si">
                    <label for="sistemas-para-internet">Sistemas Navais</label><br>
                </div>
                <div class="disciplinas">
                    <h3 class="title">Disciplinas:</h3>
                    <br>
                    <img src="" alt="grade_curricular">
                </div>
            </div>
            <!-- <div class="btn-center">
                <a href="addCurso.php"><button>Adicionar curso</button></a> &nbsp; &nbsp;
                <a href="addDisciplina.php"><button>Adicionar disciplina</button></a>
            </div> -->
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

        .infos, .title{
            width: 100%;
            display: flex;
            justify-content: space-around;
            text-align: center;
            color: white;
        }

        .cursos{
            width: 50%;
            text-align: left;
            margin-left: 10px;
        }

        input, label{
            padding: 5px;
            margin-bottom: 10px;
        }

        .disciplinas{
            width: 50%;
        }

    </style>
</body>
</html>

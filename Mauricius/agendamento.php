<?php
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $servico = $_POST["servico"];
    $data = $_POST["data"];

    $linha = "$nome | $telefone | $servico | $data\n";

    file_put_contents("agendamentos.txt", $linha, FILE_APPEND);

    header("Location: agendamento.php?sucesso=1");
    exit();
}

if (isset($_GET["sucesso"])) {
    $mensagem = "Agendamento realizado com sucesso!";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleAgendamento.css">
    <title>Agendamento</title>
</head>

<body>

    <header class="header">
        <h1>Mauriciu's</h1>

        <a href="home.html"><button class="btn">Home</button></a>
        <a href="cabelos.html"><button class="btn">Cabelos</button></a>
        <a href="estetica.html"><button class="btn">Estética</button></a>
        <a href="galeria.html"><button class="btn">Galeria</button></a>
        <a href="agendamento.php"><button class="btn">Agendamento</button></a>
    </header>

    <main>

        <section>
            <h2>Agendamento</h2>

            <?php if ($mensagem): ?>
                <p style="color:green; font-weight:bold;">
                    <?= $mensagem ?>
                </p>
            <?php endif; ?>

            <form method="POST" class="form-agendamento">

                <label>Nome:</label><br>
                <input type="text" name="nome" required><br><br>

                <label>Telefone:</label><br>
                <input type="text" name="telefone" required><br><br>

                <label>Serviço:</label><br>
                <select name="servico">
                    <option value="Corte">Corte (R$ 40,00)</option>
                    <option value="Escova">Escova (R$ 60,00)</option>
                    <option value="Manicure">Manicure (R$ 30,00)</option>
                    <option value="Pedicure">Pedicure (R$ 35,00)</option>
                    <option value="Coloração">Coloração (R$ 120,00)</option>
                </select><br><br>

                <label>Data:</label><br>
                <input type="date" name="data" required><br><br>

                <button type="submit" class="btn-agendar">
                    Agendar
                </button>

            </form>
        </section>

        <hr>

        <section>
            <h2>Como Chegar</h2>

            <iframe src="https://www.google.com/maps?q=Av.+Monsenhor+Félix,+971+-+Irajá,+Rio+de+Janeiro&output=embed"
                width="100%" height="400" style="border:0;" loading="lazy">
            </iframe>

            <p>
                Av. Monsenhor Félix, 971 - Irajá, Rio de Janeiro
            </p>
        </section>

        <hr>

        <section>
            <h2>Perguntas Frequentes</h2>

            <p><strong>Vocês atendem com hora marcada?</strong><br>
                Sim, recomendamos agendamento prévio.</p>

            <p><strong>Aceitam cartões?</strong><br>
                Aceitamos débito, crédito e PIX.</p>

            <p><strong>Posso remarcar?</strong><br>
                Basta entrar em contato pelo WhatsApp.</p>

        </section>

    </main>

    <footer class="footer">
        <div class="footer-content">
            <div class="contato">
                <h3>Contato</h3>
                <p>Telefone: (21) 2475-2033</p>
                <p>Endereço: Av. Monsenhor Félix, 971 - Irajá, Rio de Janeiro - RJ, 21361-130</p>
            </div>
            <div class="horarios">
                <h3>Funcionamento</h3>
                <p>Terça a Sabado: 09h às 19h</p>
            </div>
            <div class="redes-sociais">
                <h3>Siga-nos</h3>
                <a href="https://www.instagram.com/mauricius_coiffeur/">Instagram</a>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2026 Mauríciu's Cabeleireiro Unissex - Todos os direitos reservados.</p>
        </div>
    </footer>

</body>

</html>
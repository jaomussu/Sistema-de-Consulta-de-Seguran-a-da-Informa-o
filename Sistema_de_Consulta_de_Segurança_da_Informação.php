<?php
$opcao = -1;

while($opcao != 0) {
    echo "Seja bem-vindo!! \n";
    echo "Sistema de consulta de segurança da informação\n";
    echo "1 - Objetivos da PSI \n";
    echo "2 - Escopo da política \n";
    echo "3 - Responsabilidade \n";
    echo "4 - Boas práticas \n";
    echo "5 - Consequências \n";
    echo "6 - Boas práticas gerais \n";
    echo "0 - Sair \n";

    $opcao = readline("Escolha uma opção: ");

    switch ($opcao){
        case 1:
            echo "Objetivos da PSI: Garantir a proteção das informações da empresa. \n";
            break;
        case 2:
            echo "Escopo da política: Define onde e para quem a política se aplica. \n";
            break;
        case 3:
            echo "Responsabilidade: Cada colaborador deve cuidar da segurança das informações. \n";
            break;
        case 4:
            echo "Boas práticas: Uso de senhas fortes, não compartilhar dados, etc. \n";
            break;
        case 5:
            echo "Consequências: O não cumprimento pode gerar punições. \n";
            break;
        case 6:
            echo "Boas práticas gerais:
- Use senhas fortes e diferentes
- Não clique em links suspeitos
- Mantenha seu sistema atualizado
- Não compartilhe informações confidenciais
- Sempre faça logout em computadores públicos. \n";
            break;
        case 0:
            echo "Saindo do sistema. \n";
            break;
        default:
            echo "Opção inválida! \n";
    }

    readline("\nPressione ENTER para continuar.\n");
}
?>
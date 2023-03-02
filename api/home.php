<?php

include('protect.php');


?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ENSY - HOME</title>

    <!-- LINK CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/theme.css">
    <!-- FONTAWESSOME ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

</head>
<body>

    <!-- MENU -->
    <header class="menu">
        <div>
            <figure>
                <img src="assets/img/logoENSY.png" alt="">
            </figure>
            <div>
                <h1>ENSY23</h1>
                <p><b><?php echo $_SESSION['nome']; ?></b></p>
            </div>
        </div>

        <div class="box-buttons-menu">
            <a title="Sair" class="btn-menu" href="logout.php">
                <i class="fas fa-sign-out-alt"></i>
            </a>
    
            <button title="Configurações" id="btn-config" class="btn-menu">
                <i class="fas fa-cog"></i>
            </button>

            <ul class="open-config">
                <li id="theme-toggle">
                    <i class="far fa-sun"></i>
                    <p>Mudar tema</p>
                </li>
                <li id="openFonts">
                    <a href="https://www.stoodi.com.br/guias/enem/o-que-estudar-enem/" target="_blank">
                        <i class="fas fa-search"></i>
                        <p>Fontes</p>
                    </a>
                </li>
                <li id="openFeedback">
                    <i class="far fa-comment-alt"></i>
                    <p>Feedback</p>
                </li>
                <li class="sobreLi" id="openInfors">
                    <i class="fas fa-info"></i>
                    <p>Informações</p>
                </li>
            </ul>
        </div>
    </header>

    <!-- CONTEÚDOS -->
    <section class="box-all">

        <!-- BANNER INICIAL -->
        <section class="banner-initial">
            <div>
                <p>Olá <b><?php echo $_SESSION['nome']; ?></b>, estude cada dia mais</p>
                <h1>Seu futuro depende de muitas coisas, mas principalmente de você!</h1>
            </div>
        </section>
    
        <!-- CONTENTS -->
        <div class="box-contents">
            <!-- SOCIOLOGIA -->
        <div onclick="abrirDiv('sociologia')" class="titles">
            <h1>Sociologia</h1>
            <i class="fas fa-chevron-down"></i>
        </div>
        <ul class="box-materias hidden" id="sociologia">
                
            <label for="s_item1">
                <p>1 -Cidadania</p>
                <input class="inputCheck" id="s_item1" type="checkbox">
            </label>
                
            <label for="s_item2">
                <p>2 - Cultura e Educação</p>
                <input class="inputCheck" id="s_item2" type="checkbox">
            </label>
                
            <label for="s_item3">
                <p>3 - Política, Poder e Estado</p>
                <input class="inputCheck" id="s_item3" type="checkbox">
            </label>
                
            <label for="s_item4">
                <p>4 - Capitalismo</p>
                <input class="inputCheck" id="s_item4" type="checkbox">
            </label>
                
            <label for="s_item5">
                <p>5 - Economia e Sociedade</p>
                <input class="inputCheck" id="s_item5" type="checkbox">
            </label>
                
            <label for="s_item6">
                <p>6 - Indústria Cultural</p>
                <input class="inputCheck" id="s_item6" type="checkbox">
            </label>
                
            <label for="s_item7">
                <p>7 - Max Weber</p>
                <input class="inputCheck" id="s_item7" type="checkbox">
            </label>
                
            <label for="s_item8">
                <p>8 - O Mundo Globalizado</p>
                <input class="inputCheck" id="s_item8" type="checkbox">
            </label>
                
            <label for="s_item9">
                <p>9 - Existencialismo</p>
                <input class="inputCheck" id="s_item9" type="checkbox">
            </label>
                
            <label for="s_item10">
                <p>10 - Marxismo</p>
                <input class="inputCheck" id="s_item10" type="checkbox">
            </label>
                
            <label for="s_item11">
                <p>11 - Contratualismo</p>
                <input class="inputCheck" id="s_item11" type="checkbox">
            </label>
    
            <label for="s_item12">
                <p>12 - Relações de Trabalho</p>
                <input class="inputCheck" id="s_item12" type="checkbox">
            </label>
        
        </ul>
    
        <!-- QUÍMICA -->
        <div onclick="abrirDiv('quimica')" class="titles">
            <h1>Química</h1>
            <i class="fas fa-chevron-down"></i>
        </div>
        <ul class="box-materias hidden" id="quimica">
                
            <label for="q_item1">
                <p>1 - Ligações químicas. Polaridade e forças</p>
                <input class="inputCheck" id="q_item1" type="checkbox">
            </label>
                
            <label for="q_item2">
                <p>2 - Reações Orgânicas</p>
                <input class="inputCheck" id="q_item2" type="checkbox">
            </label>
                
            <label for="q_item3">
                <p>3 - Compostos Orgânicos</p>
                <input class="inputCheck" id="q_item3" type="checkbox">
            </label>
                
            <label for="q_item4">
                <p>4 - Eletroquímica</p>
                <input class="inputCheck" id="q_item4" type="checkbox">
            </label>
                
            <label for="q_item5">
                <p>5 - Leis ponderais e estequiometria</p>
                <input class="inputCheck" id="q_item5" type="checkbox">
            </label>
                
            <label for="q_item6">
                <p>6 - Soluções</p>
                <input class="inputCheck" id="q_item6" type="checkbox">
            </label>
                
            <label for="q_item7">
                <p>7 -  Estados físicos, sistema e misturas</p>
                <input class="inputCheck" id="q_item7" type="checkbox">
            </label>
                
            <label for="q_item8">
                <p>8 - Equilíbrios hidrólise e solubilidade</p>
                <input class="inputCheck" id="q_item8" type="checkbox">
            </label>
                
            <label for="q_item9">
                <p>9 - Termoquímica</p>
                <input class="inputCheck" id="q_item9" type="checkbox">
            </label>
                
            <label for="q_item10">
                <p>10 - Estequiometria</p>
                <input class="inputCheck" id="q_item10" type="checkbox">
            </label>
                
            <label for="q_item11">
                <p>11 - Unidades de concentração</p>
                <input class="inputCheck" id="q_item11" type="checkbox">
            </label>
    
            <label for="q_item12">
                <p>12 - pH e pOH</p>
                <input class="inputCheck" id="q_item12" type="checkbox">
            </label>
    
            <label for="q_item13">
                <p>13 - Cadeias Carbônicas</p>
                <input class="inputCheck" id="q_item13" type="checkbox">
            </label>
    
            <label for="q_item14">
                <p>14 - Radioatividade</p>
                <input class="inputCheck" id="q_item14" type="checkbox">
            </label>
    
            <label for="q_item15">
                <p>15 - Oxidações</p>
                <input class="inputCheck" id="q_item15" type="checkbox">
            </label>
        
        </ul>
    
        <!-- MATEMÁTICA -->
        <div onclick="abrirDiv('matematica')" class="titles">
            <h1>Matemática</h1>
            <i class="fas fa-chevron-down"></i>
        </div>
        <ul class="box-materias hidden" id="matematica">
                
            <label for="m_item1">
                <p>1 - Problemas de 1° e 2° graus</p>
                <input class="inputCheck" id="m_item1" type="checkbox">
            </label>
                
            <label for="m_item2">
                <p>2 - Grandezas proporcionais e médias algébricas</p>
                <input class="inputCheck" id="m_item2" type="checkbox">
            </label>
                
            <label for="m_item3">
                <p>3 -  Porcentagem e Matemática Financeira</p>
                <input class="inputCheck" id="m_item3" type="checkbox">
            </label>
                
            <label for="m_item4">
                <p>4 - Funções</p>
                <input class="inputCheck" id="m_item4" type="checkbox">
            </label>
                
            <label for="m_item5">
                <p>5 - Noções Básicas de Estatística</p>
                <input class="inputCheck" id="m_item5" type="checkbox">
            </label>
                
            <label for="m_item6">
                <p>6 -  Área de figuras planas e polígonos</p>
                <input class="inputCheck" id="m_item6" type="checkbox">
            </label>
                
            <label for="m_item7">
                <p>7 -  Análise Combinatória</p>
                <input class="inputCheck" id="m_item7" type="checkbox">
            </label>
                
            <label for="m_item8">
                <p>8 - Circunferência</p>
                <input class="inputCheck" id="m_item8" type="checkbox">
            </label>
                
            <label for="m_item9">
                <p>9 -  Função do 2° grau e inequação</p>
                <input class="inputCheck" id="m_item9" type="checkbox">
            </label>
                
            <label for="m_item10">
                <p>10 - Razões e proporções;</p>
                <input class="inputCheck" id="m_item10" type="checkbox">
            </label>
                
            <label for="m_item11">
                <p>11 - Leitura e interpretação de gráficos</p>
                <input class="inputCheck" id="m_item11" type="checkbox">
            </label>
    
            <label for="m_item12">
                <p>12 - Medidas para dados simples</p>
                <input class="inputCheck" id="m_item12" type="checkbox">
            </label>
    
            <label for="m_item13">
                <p>13 -  Prismas</p>
                <input class="inputCheck" id="m_item13" type="checkbox">
            </label>
    
            <label for="m_item14">
                <p>14 - Regra de três</p>
                <input class="inputCheck" id="m_item14" type="checkbox">
            </label>
        
        </ul>
    
        <!--HISTÓRIA -->
        <div onclick="abrirDiv('historia')" class="titles">
            <h1>História</h1>
            <i class="fas fa-chevron-down"></i>
        </div>
        <ul class="box-materias hidden" id="historia">
                
            <label for="hi_item1">
                <p>1 - 2ª Guerra Mundial e suas consequências</p>
                <input class="inputCheck" id="hi_item1" type="checkbox">
            </label>
                
            <label for="hi_item2">
                <p>2 - 2° Reinado</p>
                <input class="inputCheck" id="hi_item2" type="checkbox">
            </label>
                
            <label for="hi_item3">
                <p>3 -  Governos pós-regime militar</p>
                <input class="inputCheck" id="hi_item3" type="checkbox">
            </label>
                
            <label for="hi_item4">
                <p>4 - Era Vargas</p>
                <input class="inputCheck" id="hi_item4" type="checkbox">
            </label>
                
            <label for="hi_item5">
                <p>5 - A República Velha</p>
                <input class="inputCheck" id="hi_item5" type="checkbox">
            </label>
                
            <label for="hi_item6">
                <p>6 -  Baixa Idade Média</p>
                <input class="inputCheck" id="hi_item6" type="checkbox">
            </label>
                
            <label for="hi_item7">
                <p>7 - Administração Colonial</p>
                <input class="inputCheck" id="hi_item7" type="checkbox">
            </label>
                
            <label for="hi_item8">
                <p>8 - Grécia e Roma</p>
                <input class="inputCheck" id="hi_item8" type="checkbox">
            </label>
                
            <label for="hi_item9">
                <p>9 - Regime Militar</p>
                <input class="inputCheck" id="hi_item9" type="checkbox">
            </label>
                
            <label for="hi_item10">
                <p>10 - Sistema e Economia Colonial</p>
                <input class="inputCheck" id="hi_item10" type="checkbox">
            </label>
                
            <label for="hi_item11">
                <p>11 - Período Colonial</p>
                <input class="inputCheck" id="hi_item11" type="checkbox">
            </label>
    
            <label for="hi_item12">
                <p>12 - Período de escravidão</p>
                <input class="inputCheck" id="hi_item12" type="checkbox">
            </label>
    
            <label for="hi_item13">
                <p>13 -  Ditadura Militar</p>
                <input class="inputCheck" id="hi_item13" type="checkbox">
            </label>
    
            <label for="hi_item14">
                <p>14 - Era populista</p>
                <input class="inputCheck" id="hi_item14" type="checkbox">
            </label>
    
            <label for="hi_item15">
                <p>15 - Período de Idade Média e Moderna</p>
                <input class="inputCheck" id="hi_item15" type="checkbox">
            </label>
    
            <label for="hi_item16">
                <p>16 - Período de Idade Média e Moderna</p>
                <input class="inputCheck" id="hi_item16" type="checkbox">
            </label>
    
            <label for="hi_item17">
                <p>17 - Primeira Guerra Mundial</p>
                <input class="inputCheck" id="hi_item17" type="checkbox">
            </label>
    
            <label for="hi_item18">
                <p>18 - Nazismo/Holocausto e Fascismo</p>
                <input class="inputCheck" id="hi_item18" type="checkbox">
            </label>
    
            <label for="hi_item19">
                <p>19 - Liberalismo</p>
                <input class="inputCheck" id="hi_item19" type="checkbox">
            </label>
    
            <label for="hi_item20">
                <p>20 - Guerra Fria</p>
                <input class="inputCheck" id="hi_item20" type="checkbox">
            </label>
        
        </ul>
    
        <!-- GEOGRAFIA -->
        <div onclick="abrirDiv('geografia')" class="titles">
            <h1>Geografia</h1>
            <i class="fas fa-chevron-down"></i>
        </div>
        <ul class="box-materias hidden" id="geografia">
                
            <label for="ge_item1">
                <p>1 - Questões Ambientais</p>
                <input class="inputCheck" id="ge_item1" type="checkbox">
            </label>
                
            <label for="ge_item2">
                <p>2 - Climatologia</p>
                <input class="inputCheck" id="ge_item2" type="checkbox">
            </label>
                
            <label for="ge_item3">
                <p>3 - Urbanização</p>
                <input class="inputCheck" id="ge_item3" type="checkbox">
            </label>
                
            <label for="ge_item4">
                <p>4 - Globalização</p>
                <input class="inputCheck" id="ge_item4" type="checkbox">
            </label>
                
            <label for="ge_item5">
                <p>5 - Cartografia</p>
                <input class="inputCheck" id="ge_item5" type="checkbox">
            </label>
                
            <label for="ge_item6">
                <p>6 - Geografia Agrária</p>
                <input class="inputCheck" id="ge_item6" type="checkbox">
            </label>
                
            <label for="ge_item7">
                <p>7 - Indústria</p>
                <input class="inputCheck" id="ge_item7" type="checkbox">
            </label>
                
            <label for="ge_item8">
                <p>8 - Demografia</p>
                <input class="inputCheck" id="ge_item8" type="checkbox">
            </label>
                
            <label for="ge_item9">
                <p>9 - Biogeografia</p>
                <input class="inputCheck" id="ge_item9" type="checkbox">
            </label>
                
            <label for="ge_item10">
                <p>10 - Planos e blocos econômicos</p>
                <input class="inputCheck" id="ge_item10" type="checkbox">
            </label>
                
            <label for="ge_item11">
                <p>11 - Geopolítica mundial</p>
                <input class="inputCheck" id="ge_item11" type="checkbox">
            </label>
    
            <label for="ge_item12">
                <p>12 - Migrações</p>
                <input class="inputCheck" id="ge_item12" type="checkbox">
            </label>
    
            <label for="ge_item13">
                <p>13 -  Desenvolvimento humano e social</p>
                <input class="inputCheck" id="ge_item13" type="checkbox">
            </label>
    
            <label for="ge_item14">
                <p>14 - Ordem Mundial e Conflitos</p>
                <input class="inputCheck" id="ge_item14" type="checkbox">
            </label>
        
        </ul>
    
        <!-- FÍSICA -->
        <div onclick="abrirDiv('fisica')" class="titles">
            <h1>Física</h1>
            <i class="fas fa-chevron-down"></i>
        </div>
        <ul class="box-materias hidden" id="fisica">
                
            <label for="fi_item1">
                <p>1 - Acústica</p>
                <input class="inputCheck" id="fi_item1" type="checkbox">
            </label>
                
            <label for="fi_item2">
                <p>2 - Energia, trabalho e potência</p>
                <input class="inputCheck" id="fi_item2" type="checkbox">
            </label>
                
            <label for="fi_item3">
                <p>3 - Resistores</p>
                <input class="inputCheck" id="fi_item3" type="checkbox">
            </label>
                
            <label for="fi_item4">
                <p>4 - Calorimetria</p>
                <input class="inputCheck" id="fi_item4" type="checkbox">
            </label>
                
            <label for="fi_item5">
                <p>5 - Impulso, quantidade de movimento e análise dimensional</p>
                <input class="inputCheck" id="fi_item5" type="checkbox">
            </label>
                
            <label for="fi_item6">
                <p>6 - Introdução à Óptica Geométrica</p>
                <input class="inputCheck" id="fi_item6" type="checkbox">
            </label>
                
            <label for="fi_item7">
                <p>7 - Atrito e movimento circular</p>
                <input class="inputCheck" id="fi_item7" type="checkbox">
            </label>
                
            <label for="fi_item8">
                <p>8 - Forças Magnéticas, indução e fluxo</p>
                <input class="inputCheck" id="fi_item8" type="checkbox">
            </label>
                
            <label for="fi_item9">
                <p>9 - Gases</p>
                <input class="inputCheck" id="fi_item9" type="checkbox">
            </label>
                
            <label for="fi_item10">
                <p>10 - Geradores, receptores, capacitores e leis de Kirchhoff</p>
                <input class="inputCheck" id="fi_item10" type="checkbox">
            </label>
                
            <label for="fi_item11">
                <p>11 - Eletricidade</p>
                <input class="inputCheck" id="fi_item11" type="checkbox">
            </label>
    
            <label for="fi_item12">
                <p>12 - Hidrostática</p>
                <input class="inputCheck" id="fi_item12" type="checkbox">
            </label>
    
            <label for="fi_item13">
                <p>13 - Ondas</p>
                <input class="inputCheck" id="fi_item13" type="checkbox">
            </label>
    
            <label for="fi_item14">
                <p>14 - Mecânica</p>
                <input class="inputCheck" id="fi_item14" type="checkbox">
            </label>
    
            <label for="fi_item15">
                <p>15 - Usinas / Instalações Residenciais</p>
                <input class="inputCheck" id="fi_item15" type="checkbox">
            </label>
    
        </ul>
    
        <!-- FILOSOFIA -->
        <div onclick="abrirDiv('filosofia')" class="titles">
            <h1>Filosofia</h1>
            <i class="fas fa-chevron-down"></i>
        </div>
        <ul class="box-materias hidden" id="filosofia">
                
            <label for="filo_item1">
                <p>1 - Aristóteles e escola helenística</p>
                <input class="inputCheck" id="filo_item1" type="checkbox">
            </label>
                
            <label for="filo_item2">
                <p>2 - Racionalismo Moderno</p>
                <input class="inputCheck" id="filo_item2" type="checkbox">
            </label>
                
            <label for="filo_item3">
                <p>3 - Escola sofística, Sócrates e Platão</p>
                <input class="inputCheck" id="filo_item3" type="checkbox">
            </label>
                
            <label for="filo_item4">
                <p>4 - Filosofia Contemporânea</p>
                <input class="inputCheck" id="filo_item4" type="checkbox">
            </label>
                
            <label for="filo_item5">
                <p>5 - Escola de Frankfurt</p>
                <input class="inputCheck" id="filo_item5" type="checkbox">
            </label>
                
            <label for="filo_item6">
                <p>6 - Filosofia Medieval</p>
                <input class="inputCheck" id="filo_item6" type="checkbox">
            </label>
                
            <label for="filo_item7">
                <p>7 - Idealismo alemão</p>
                <input class="inputCheck" id="filo_item7" type="checkbox">
            </label>
                
            <label for="filo_item8">
                <p>8 - Renascimento</p>
                <input class="inputCheck" id="filo_item8" type="checkbox">
            </label>
                
            <label for="filo_item9">
                <p>9 - Immanuel Kant</p>
                <input class="inputCheck" id="filo_item9" type="checkbox">
            </label>
                
            <label for="filo_item10">
                <p>10 - Nietzche</p>
                <input class="inputCheck" id="filo_item10" type="checkbox">
            </label>
                
            <label for="filo_item11">
                <p>11 - Iluminismo</p>
                <input class="inputCheck" id="filo_item11" type="checkbox">
            </label>
    
            <label for="filo_item12">
                <p>12 - Cultura de massa</p>
                <input class="inputCheck" id="filo_item12" type="checkbox">
            </label>
    
            <label for="filo_item13">
                <p>13 - Movimentos sociais</p>
                <input class="inputCheck" id="filo_item13" type="checkbox">
            </label>
    
            <label for="filo_item14">
                <p>14 - Fé e Razão: São Tomás e Santo Agostinho</p>
                <input class="inputCheck" id="filo_item14" type="checkbox">
            </label>
    
            <label for="filo_item15">
                <p>15 - Pensadores da Grécia Antiga</p>
                <input class="inputCheck" id="filo_item15" type="checkbox">
            </label>
    
        </ul>
    
        <!-- BIOLOGIA -->
        <div onclick="abrirDiv('biologia')" class="titles">
            <h1>Biologia</h1>
            <i class="fas fa-chevron-down"></i>
        </div>
        <ul class="box-materias hidden" id="biologia">
                
            <label for="bio_item1">
                <p>1 - Sistema imunitário</p>
                <input class="inputCheck" id="bio_item1" type="checkbox">
            </label>
                
            <label for="bio_item2">
                <p>2 - Ecossistema</p>
                <input class="inputCheck" id="bio_item2" type="checkbox">
            </label>
                
            <label for="bio_item3">
                <p>3 - Fundamentos da ecologia</p>
                <input class="inputCheck" id="bio_item3" type="checkbox">
            </label>
                
            <label for="bio_item4">
                <p>4 - DNA e RNA</p>
                <input class="inputCheck" id="bio_item4" type="checkbox">
            </label>
                
            <label for="bio_item5">
                <p>5 - Genética e mutações</p>
                <input class="inputCheck" id="bio_item5" type="checkbox">
            </label>
                
            <label for="bio_item6">
                <p>6 - Hematologia</p>
                <input class="inputCheck" id="bio_item6" type="checkbox">
            </label>
                
            <label for="bio_item7">
                <p>7 - Angiosperma</p>
                <input class="inputCheck" id="bio_item7" type="checkbox">
            </label>
                
            <label for="bio_item8">
                <p>8 - Proteínas e enzimas</p>
                <input class="inputCheck" id="bio_item8" type="checkbox">
            </label>
                
            <label for="bio_item9">
                <p>9 - Bioenergética</p>
                <input class="inputCheck" id="bio_item9" type="checkbox">
            </label>
                
            <label for="bio_item10">
                <p>10 - Bioma</p>
                <input class="inputCheck" id="bio_item10" type="checkbox">
            </label>
                
            <label for="bio_item11">
                <p>11 - Sustentabilidade, bem como problemas ambientais</p>
                <input class="inputCheck" id="bio_item11" type="checkbox">
            </label>
    
            <label for="bio_item12">
                <p>12 - Evolução</p>
                <input class="inputCheck" id="bio_item12" type="checkbox">
            </label>
    
            <label for="bio_item13">
                <p>13 - Imunização</p>
                <input class="inputCheck" id="bio_item13" type="checkbox">
            </label>
    
            <label for="bio_item14">
                <p>14 - Citologia</p>
                <input class="inputCheck" id="bio_item14" type="checkbox">
            </label>
    
            <label for="bio_item15">
                <p>15 - Ciclos de carbono, nitrogênio e água</p>
                <input class="inputCheck" id="bio_item15" type="checkbox">
            </label>
    
        </ul>
    
        <!-- PORTUGUES -->
        <div onclick="abrirDiv('portugues')" class="titles">
            <h1>Português</h1>
            <i class="fas fa-chevron-down"></i>
        </div>
        <ul class="box-materias hidden" id="portugues">
                
            <label for="lit_item1">
                <p>1 - Aspectos do texto</p>
                <input class="inputCheck" id="por_item1" type="checkbox">
            </label>
                
            <label for="por_item2">
                <p>2 - Tendências contemporâneas</p>
                <input class="inputCheck" id="por_item2" type="checkbox">
            </label>
                
            <label for="por_item3">
                <p>3 - Estrutura e formação das palavras</p>
                <input class="inputCheck" id="por_item3" type="checkbox">
            </label>
                
            <label for="por_item4">
                <p>4 - Tipos de texto</p>
                <input class="inputCheck" id="por_item4" type="checkbox">
            </label>
                
            <label for="por_item5">
                <p>5 - Categorias de mundo</p>
                <input class="inputCheck" id="por_item5" type="checkbox">
            </label>
                
            <label for="por_item6">
                <p>6 - Funções de linguagem e gramática</p>
                <input class="inputCheck" id="por_item6" type="checkbox">
            </label>
                
            <label for="por_item7">
                <p>7 - Narratividade</p>
                <input class="inputCheck" id="por_item7" type="checkbox">
            </label>
                
            <label for="por_item8">
                <p>8 - Funções de linguagem</p>
                <input class="inputCheck" id="por_item8" type="checkbox">
            </label>
                
            <label for="por_item9">
                <p>9 - Pontuação</p>
                <input class="inputCheck" id="por_item9" type="checkbox">
            </label>
                
            <label for="por_item10">
                <p>10 - Classe de palavras</p>
                <input class="inputCheck" id="por_item10" type="checkbox">
            </label>
                
            <label for="por_item11">
                <p>11 - Verbo</p>
                <input class="inputCheck" id="por_item11" type="checkbox">
            </label>
    
            <label for="por_item12">
                <p>12 - Semântica</p>
                <input class="inputCheck" id="por_item12" type="checkbox">
            </label>
    
            <label for="por_item13">
                <p>13 - Compreensão e interpretação de texto</p>
                <input class="inputCheck" id="por_item13" type="checkbox">
            </label>
    
            <label for="por_item14">
                <p>14 - Norma culta e coloquial</p>
                <input class="inputCheck" id="por_item14" type="checkbox">
            </label>
    
            <label for="por_item15">
                <p>15 - Morfologia</p>
                <input class="inputCheck" id="por_item15" type="checkbox">
            </label>
    
            <label for="por_item16">
                <p>16 - Linguística</p>
                <input class="inputCheck" id="por_item16" type="checkbox">
            </label>
    
            <label for="por_item17">
                <p>17 - Sintaxe</p>
                <input class="inputCheck" id="por_item17" type="checkbox">
            </label>
    
            <label for="por_item18">
                <p>18 - Gêneros textuais</p>
                <input class="inputCheck" id="por_item18" type="checkbox">
            </label>
    
        </ul>
    
        <!------------------------------ LITERATURA ---------------------->
        <div onclick="abrirDiv('literatura')" class="titles">
            <h1>Literatura</h1>
            <i class="fas fa-chevron-down"></i>
        </div>
        <ul class="box-materias hidden" id="literatura">
                
            <label for="lit_item1">
                <p>1 - barroco, quinhentismo, modernismo, naturalismo e realismo</p>
                <input class="inputCheck" id="lit_item1" type="checkbox">
            </label>
                
            <label for="lit_item2">
                <p>2 - Obras literárias: principalmente clássicos brasileiros</p>
                <input class="inputCheck" id="lit_item2" type="checkbox">
            </label>
                
            <label for="lit_item3">
                <p>3 - Figuras de linguagem</p>
                <input class="inputCheck" id="lit_item3" type="checkbox">
            </label>
                
            <label for="lit_item4">
                <p>4 - Poesias Concretas</p>
                <input class="inputCheck" id="lit_item4" type="checkbox">
            </label>
                
            <label for="lit_item5">
                <p>5 - E por fim, Literatura Contemporânea</p>
                <input class="inputCheck" id="lit_item5" type="checkbox">
            </label>
    
        </ul>
    
        <!----------------------- REDAÇÃO ----------------------------->
        <div onclick="abrirDiv('redacao')" class="titles">
            <h1>Redação</h1>
            <i class="fas fa-chevron-down"></i>
        </div>
        <ul class="box-materias hidden" id="redacao">
                
            <label for="red_item1">
                <p>1 - Impactos da pandemia na sociedade brasileira</p>
                <input class="inputCheck" id="red_item1" type="checkbox">
            </label>
                
            <label for="red_item2">
                <p>2 - Desastres ambientais: Amazônia e Pantanal “em chamas</p>
                <input class="inputCheck" id="red_item2" type="checkbox">
            </label>
                
            <label for="red_item3">
                <p>3 - Cultura do cancelamento no meio virtual</p>
                <input class="inputCheck" id="red_item3" type="checkbox">
            </label>
                
            <label for="red_item4">
                <p>4 - O combate à depressão na sociedade</p>
                <input class="inputCheck" id="red_item4" type="checkbox">
            </label>
                
            <label for="red_item5">
                <p>5 - Evasão escolar e suas consequências</p>
                <input class="inputCheck" id="red_item5" type="checkbox">
            </label>
                
            <label for="red_item6">
                <p>6 - Efeitos da polarização política no Brasil</p>
                <input class="inputCheck" id="red_item6" type="checkbox">
            </label>
                
            <label for="red_item7">
                <p>7 - Agenda 2030 da ONU</p>
                <input class="inputCheck" id="red_item7" type="checkbox">
            </label>
                
            <label for="red_item8">
                <p>8 - Trabalhador 4.0</p>
                <input class="inputCheck" id="red_item8" type="checkbox">
            </label>
                
            <label for="red_item9">
                <p>9 - Guerra na Ucrânia</p>
                <input class="inputCheck" id="red_item9" type="checkbox">
            </label>
    
        </ul>
    
        <!------------------------ EDUCAÇÃO FÍSICA E ARTES ---------------------------->
        <div onclick="abrirDiv('efisicaeartes')" class="titles">
            <h1>Educação Física e Artes</h1>
            <i class="fas fa-chevron-down"></i>
        </div>
        <ul class="box-materias hidden" id="efisicaeartes">
                
            <label for="efa_item1">
                <p>1 - Esportes</p>
                <input class="inputCheck" id="efa_item1" type="checkbox">
            </label>
                
            <label for="efa_item2">
                <p>2 - Música</p>
                <input class="inputCheck" id="efa_item2" type="checkbox">
            </label>
                
            <label for="efa_item3">
                <p>3 - Grafite</p>
                <input class="inputCheck" id="efa_item3" type="checkbox">
            </label>
                
            <label for="efa_item4">
                <p>4 - Artes marciais</p>
                <input class="inputCheck" id="efa_item4" type="checkbox">
            </label>
                
            <label for="efa_item5">
                <p>5 - Cubismo</p>
                <input class="inputCheck" id="efa_item5" type="checkbox">
            </label>
                
            <label for="efa_item6">
                <p>6 - Obras artísticas</p>
                <input class="inputCheck" id="efa_item6" type="checkbox">
            </label>
                
            <label for="efa_item7">
                <p>7 - Renascimento</p>
                <input class="inputCheck" id="efa_item7" type="checkbox">
            </label>
                
            <label for="efa_item8">
                <p>8 - Movimentos artísticos e culturais</p>
                <input class="inputCheck" id="efa_item8" type="checkbox">
            </label>
    
        </ul>
        </div>

        <!-- FEEDBACKS -->
        <div class="feedback hidden">
            
            <button class="btn-closeFeedback">
                <i class="fas fa-times"></i>
            </button>
            <form action="https://formsubmit.co/kaull.dev@gmail.com" method="POST">
                <h1>Feedback</h1>
                <section class="inputs-feedback">
                    <input type="text" name="name" placeholder="Seu Nome" required />
                    <input type="email" name="email" placeholder="Seu e-mail" required/>
                    <input type="hidden" name="_captcha" value="false" />
                    <!-- <input type="hidden" name="_next" value=""/> -->
                </section>

                <section>
                    <textarea name="message" placeholder="Sua mensagem" required></textarea>
                </section>

                <button type="submit" class="btn-all">Enviar</button>
            </form>
        </div>

        <!-- INFORMAÇÕES / cookie -->
        <div class="alertCookie hidden">

           <section>
            <h1>Sobre o sistema:</h1>

                <ul>
                    <li><b>1</b> - Sistema desenvolvido para eficácia de aprendizagem para o estudante do ENEM.</li>
                    <li><b>2</b> - Escolha por qual máteria começar clicando nos títulos.</li>
                    <li><b>3</b> - Logo após clicado na matéria aparecerá seus tópicos de estudo.</li>
                    <li><b>4</b> - Em seguida clique no tópico para deixar marcado como concluído.</li>
                    <li><b>5</b> - Separamos conteúdos que irão cair no ENEM de 2023.</li>
                    <li><b>6</b> - No canto superior direito temos um botão de configurações no qual vc pode mudar de tema, ver de onde foi obtida as fontes
                    de conteúdos, nos deixar um feedback e em informações você poderá rever esse artigo.</li>
                </ul>

                <h1>Informações Importantes:</h1>

                <ul>
                    <li><b>1</b> - Ao limpar dados do seu navegador como histórico e etc, todos os dados de salvamento do site será perdido.</li>
                    <li><b>2</b> - Estamos em construção para melhor desempenho visual e manual.</li>
                    <li><b>3</b> - Deixe nos um feedback para melhoria do sistema tais como novos conteúdos ou modelos de organizações e até mesmo 
                    reclamações.</li>
                </ul>

                <button class="btnCookie">Aceito os termos de uso</button>
           </section>

        </div>
    
        <!-- FOOTER -->
        <footer>
            <h1>Criado por <a href="https://www.instagram.com/dev_mallone/?next=%2Fkaullony_brito%2F" target="_blank">Dev_Mallone</a></h1>
            <p class="copy"> © ENSY2023 - Todos os direitos reservados</p>
        </footer>
    </section>


    <script type="text/JavaScript" src="..//assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>

    <!-- MUDAR TEMA / COOKIE -->
    <script>     
        var darkMode = false;

        // default to system setting
        if (window.matchMedia('(prefers-color-scheme: light)').matches) {
            darkMode = true;
        }

        // preference from localStorage should overwrite
        if (localStorage.getItem('theme') === 'dark') {
            darkMode = true;
        } else if (localStorage.getItem('theme') === 'light') {
            darkMode = false;
        }

        if (darkMode) {
            document.body.classList.toggle('dark');
        }

        document.addEventListener('DOMContentLoaded', () => {

            document.getElementById('theme-toggle').addEventListener('click', () => {
                document.body.classList.toggle('dark');
                localStorage.setItem('theme', document.body.classList.contains('dark') ? 'dark' : 'light');
            });

        });

        // AVISOS
        if(!localStorage.alertCookie){
            document.querySelector('.alertCookie').classList.remove('hidden');
        }

        const acceptCookie = () =>{
            document.querySelector('.alertCookie').classList.add('hidden');
            localStorage.setItem("alertCookie", "accept");
        }

        const btnCookie = document.querySelector(".btnCookie");
        btnCookie.addEventListener('click', acceptCookie);

        // VALIDAÇÕES DE FECHAMENTOS

        $("#openInfors").click(function(){
            $(".alertCookie").removeClass('hidden');
            $(".open-config").css('display', "none");
            $(".feedback").addClass('hidden');
        });

        $("#openFeedback").click(function(){
            $(".feedback").removeClass('hidden');
            $(".open-config").css('display', "none");
            $(".alertCookie").addClass('hidden');
        });

        $(".btn-closeFeedback").click(function(){
            $(".feedback").addClass('hidden');
        });

        $("#theme-toggle").click(function(){
            $(".open-config").css('display', "none");
        });

        $("#openFonts").click(function(){
            $(".open-config").css('display', "none");
            $(".feedback").addClass('hidden');
            $(".alertCookie").addClass('hidden');
        });

    </script>

</body>
</html>
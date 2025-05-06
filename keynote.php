<!DOCTYPE html>
<html lang=en xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:m="http://schemas.microsoft.com/office/2004/12/omml">
<?php include('head.html');?>
<body>
<header>
<?php include('menu.php');?>
<style>
    .container1 {
      display: flex;
      max-width: 1000px;
      margin: 0 auto;
      border: 1px solid #ccc;
      border-radius: 8px;
      overflow: hidden;
    }
    .left-column {
      width:25%;
      background-color: #f2f2f2;
    }
    .left-column img {
      width: 100%;
	  padding: 5px;
	  padding-top: 0px;
      height: auto;
      display: block;
    }
    .right-column {
      width:75%;
      padding: 20px;
	  padding-top: 30px;
      background-color: #f2f2f2;
    }
  </style>
</header>
<div class="twelve columns section">
<div class=container>
<h1>Keynote Speakers</h1>
</div>

</div>


<div class="entry-content">
<div class="container1">
  <div class="left-column">
	<h5 style="text-align:center;">Keynote 1</h5>
    <img src="img/andreaschaerf.jpg" width="120" height="167" >
	<p style="text-align:center;"><span style="font-size:18px;"><strong>Andrea Schaerf <br>University of Udine <br>Email:andrea.schaerf@uniud.it</strong></span></p>
	
	
                    
  </div>
  <div class="right-column">
<p><b>Topic</b>: Integrated Optimization in Healthcare</<p>

<p><b>Title</b>: The Integrated Healthcare Timetabling Competition (IHTC-2024): Formulation, Rules, Results, and Solution by Local Search.</p>

<p><b>Presenter: Andrea Schaerf, DPIA, University of Udine, Italy </b></p>

<p><b>Abstract</b>: In this talk, we introduce a novel optimization problem that integrates three critical aspects of healthcare operations: surgical case planning, patient admission scheduling, and nurse-to-room assignment. This problem served as the benchmark for the Integrated Healthcare Timetabling Competition (IHTC-2024, https://ihtc2024.github.io/), which aimed to stimulate research on the specific challenges of integrated scheduling in healthcare. We will discuss the problem’s features, the competition's rules and infrastructure, its datasets, the search methods employed by the 32 participants, and the general insights gained from organizing and analyzing the competition.
<br>We then present our solution method for the IHTC-2024 problem, based on a Multi-Neighborhood Simulated Annealing approach. The method is fully integrated, meaning that at any point during the search process, any aspect of a patient’s stay or nurse assignment can be modified.
<br>The search space is designed to exclude infeasible patient assignments while allowing the violation of certain hard constraints to improve connectivity and enable broader exploration. To efficiently navigate this space, we defined a portfolio of five neighborhoods: four focus on different aspects of a patient's stay—including admission schedule, assigned operating theater, and recovery room—while the fifth addresses nurse assignments. Our results are fully consistent with those of the top-performing participants in IHTC-2024, demonstrating the effectiveness of our approach.</p>

<p><b>Short Bio</b>: Andrea Schaerf received his PhD in Computer Science from the University of Rome "La Sapienza" in 1994. From 1996 to 1998, he was an Assistant Professor at the same university. From 1998 to 2005, he served as Associate Professor at the University of Udine, where he has been Full Professor since 2005. From 2015 to 2021, he was Head of the School of Management Engineering.
He served as Program Chair of the 11th International Conference on the Practice and Theory of Automated Timetabling (PATAT 2016) and the 9th Metaheuristics International Conference (MIC 2011). He is a member of the editorial boards of International Transactions in Operational Research and Journal of Scheduling.
He has been a Plenary Speaker at the 6th and 13th International Conferences on the Practice and Theory of Automated Timetabling (PATAT 2006 and PATAT 2022), a speaker at the 1st International Metaheuristics Summer School (MESS 2018), and an invited speaker at the 27th Annual Conference of the Belgian Operations Research Society (ORBEL 27, 2013).</p>
          
  </div>
 
   
</div>
</div>

<div class="entry-content">
<div class="container1">
  <div class="left-column">
	<h5 style="text-align:center;">Keynote 2</h5>
    <img src="img/AlexisDrogoul.jpg" width="120" height="167" >
	<p style="text-align:center;"><span style="font-size:18px;"><strong>Prof. Alexis Drogoul<br> Ummisco, IRD, France </strong></span></p>
                   
  </div>
  <div class="right-column">
		<p><b>Topic:  </b>Agent-based Modeling and Simulation for Sustainability</p>
		<p><b>Title: </b>Modeling to support sustainability science: how open agent-based platforms can foster transdisciplinary approaches</p>
		<p><b>Presenter: Prof. Alexis Drogoul, Ummisco, IRD, France </b></p>
		<p><b>Abstract: </b>Open-source agent-based modeling and simulation platforms (ABPs) such as GAMA offer powerful tools for simulating the evolution of complex socio-environmental systems. However, the design, construction, maintenance, and evolution of these platforms pose significant research and software engineering challenges, particularly in fast-growing fields such as sustainability science, which, by its cross-disciplinary nature, emphasizes the use of inter- and trans-disciplinary methods while tackling issues of unprecedented complexity. This translates into a growing demand for openness, coupling, participation, interactivity, interpretability, scalability and integration of modeling with the various scientific practices of sustainability, themselves increasingly based on the virtual exploration of potential scenarios. After an introduction to GAMA and a brief account of its 17-year history, I will compare GAMA's current capabilities with these emerging demands, highlighting areas where research efforts are needed. This presentation also aims to inform the future development of open source ABPs, ensuring that they remain at the forefront of open science practices and facilitate innovative research and stakeholder interaction in areas such as sustainability science. Examples will be drawn from current applications in Vietnam, which support transdisciplinary approaches through new visualization techniques (tangible interfaces, virtual reality) to enhance stakeholder engagement.</p>
		<p><b>Short Bio: </b>Alexis DROGOUL holds a PhD and a habilitation thesis in computer science. He was a professor at Sorbonne University from 1994 to 2004, and since 2005 has been a senior researcher at IRD, the French National Research Institute for Sustainable Development. His work, which has been the subject of over 200 articles, focuses on the development of software tools (such as GAMA, http://gama-platform.org) to support the modeling and simulation of socio-environmental systems, with a view to facilitating interdisciplinary work and involving social actors in model construction. In this capacity, he has helped define the fundamental concepts of "agent-based modeling", while working on numerous applications of this paradigm for environmental decision support, notably in Vietnam, where he has helped build several research laboratories on this theme since 2006. </p>
  </div>
</div>
</div>

<?php include('foot.html');?>
</body>
</html>
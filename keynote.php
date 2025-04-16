<!DOCTYPE html>
<html lang=en xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:m="http://schemas.microsoft.com/office/2004/12/omml">
<?php include('head.html');?>
<body>
<header>
<?php include('menu.html');?>
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
	<p style="text-align:center;"><span style="font-size:18px;"><strong>Andrea Schaerf</strong></span></p>
	<p style="text-align:center;"><span style="font-size:18px;"><strong>University of Udine</strong></span></p>
	
	
                    
  </div>
  <div class="right-column">
<p><b>Topic</b>: Integrated Optimization in Healthcare</<p>

<p><b>Title</b>: The Integrated Healthcare Timetabling Competition (IHTC-2024): Formulation, Rules, Results, and Solution by Local Search.</p>

<p><b>Presenter</b>: Andrea Schaerf, DPIA, University of Udine, Italy (email: andrea.schaerf@uniud.it)</p>

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
	<p style="text-align:center;"><span style="font-size:18px;"><strong>Prof. Alexis Drogoul, Ummisco, IRD, France </strong></span></p>
                   
  </div>
  <div class="right-column">
		<p><b>Topic: </b>TBD</p>
		<p><b>Title: </b>TBD</p>
		<p><b>Presenter: </b>: Prof. Alexis Drogoul, Ummisco, IRD, France</p>
		<p><b>Abstract: </b>TBD</p>
		<p><b>Short Bio: </b>Prof. Alexis Drogoul, Ummisco, IRD, France </p>
  </div>
</div>
</div>

<?php include('foot.html');?>
</body>
</html>
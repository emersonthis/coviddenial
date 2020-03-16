<?php

$points = [
  [
    'misunderstanding' => 'It\'s just the flu.',
    'understanding' => 'It isn\'t! The severity is more similar to pneumonia. Many patients require respiratory support. It is also more contagious than the common flu.',
    'anchor' => 'justflu',
    'sources' => [
                    'https://www.vox.com/future-perfect/2020/3/12/21172040/coronavirus-covid-19-virus-charts', 
                    'https://www.ncbi.nlm.nih.gov/pubmed/32064853'
                  ]
  ],
  [
    'misunderstanding' => 'I\'m young and healthy so I don\'t need to care.',
    'understanding' => 'Young and healthy people are generally less likely to die if infected, but this is not the point! Treatable conditions easily become deadly if the health system collapses. We are not equipped to handle hundreds or thousands of respiratory patients at the same time. In places where the outbreak is full-blown, the medical facilities are completely overwhelmed. Patients are in hallways and gymnasiums. Doctors are being forced to ration limited resources like ventilators, oxygen, and even basic supplies like masks and gloves. You might be lucky, but it will likely be at the expense of others in your community.',
    'anchor' => 'younghealthy',
    'sources' => ['https://medium.com/@tomaspueyo/coronavirus-act-today-or-people-will-die-f4d3d9cd99ca']
  ],
  [
    'misunderstanding' => 'There are no infections near me.',
    'understanding' => 'There are almost definitely infections near you! But you cannot <strong>see</strong> them yet because there is a two week delay between the time of infection and when someone shows symptoms. During that time, the infected person is contagious and spreading the infection. For every single diagnosed case of COVID-19, there are likely hundreds of undiagnosed cases. For this reason, our only chance to avoid a massive public health disaster is if we take preventative measures <strong>before</strong> we see it everywhere.',
    'anchor' => 'notnear',
    'sources' => ['https://www.cnn.com/2020/03/14/health/coronavirus-asymptomatic-spread/index.html']
  ],
  // [
  //   'misunderstanding' => 'No emergency has been announced in my area.',
  //   'understanding' => 'This situation is unprecedented. No one wants to seem like an alarmist',
  //   'anchor' => 'noemergency'
  // ],
  [
    'misunderstanding' => 'I cannot afford to stay home or close my small business.',
    'understanding' => 'This is a public health <strong>and</strong> economic crisis. Everyone is impacted. All the evidence indicates that the pandemic will force most businesses to close soon whether we want to or not. Ideally, public officials will take decisive steps to mandate social distancing as it is currently one of the only tools available to <a target="_blank" href="https://www.flattenthecurve.com/">flatten the curve</a> of infections and save lives. We can\'t opt out of this pandemic, but we can opt out of unnecessary risk of infection. If a tsunami was coming towards your town, would you complain about the economic cost of evacuating? This outbreak is an invisible tsunami, but unlike the countries where it hit first, we have advanced warning. The US wasted much of that head start with inaction, but one of the lessons becoming increasingly clear is that every single day counts.',
    'anchor' => 'cantafford',
    'sources' => [
                    'https://medium.com/@tomaspueyo/coronavirus-act-today-or-people-will-die-f4d3d9cd99ca',
                    'https://staythefuckhome.com/'
                  ]
  ],
  [
    'misunderstanding' => 'The media is overblowing this. People are panicking.',
    'understanding' => 'There has been a lot of misinformation and the media is predisposed to fearmongering. But this does not change the fact that the situation is very serious. Panicking is dangerous and unproductive, but so is ignorance and inaction.',
    'anchor' => 'media',
    'sources' => ['https://medium.com/@tomaspueyo/coronavirus-act-today-or-people-will-die-f4d3d9cd99ca']
  ],
  [
    'misunderstanding' => 'There\'s no point in me staying home because some people aren\'t.',
    'understanding' => 'The goal of social distancing is to slow the rate of infections and more is better, but it is not "all or nothing." In the context of an exponential growth pattern, even small reductions have large effects. If the wellbeing of your greater community doesn\'t motivate you, remember that you are risking infecting yourself and your family.',
    'anchor' => 'otherpeople',
    'sources' => []
  ],

];
?>
<!doctype html>
<html class="no-js" lang="">

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-160623037-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-160623037-1');
  </script>

  <meta charset="utf-8">
  <title>Don't be a COVID-19 denier!</title>
  <meta name="description" content="Consice answers to common misconceptions about the COVID-19 pandemic">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Place favicon.ico in the root directory -->
  <link rel="stylesheet" href="./style.css?v=2">
  <meta name="theme-color" content="deeppink">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,800&display=swap" rel="stylesheet">
</head>

<body>
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->
  <h1 class="title">Don't be a #COVIDDENIER</h1>
  <ul class="points">

  <?php foreach( $points as $point) : ?>
    <li class="point" id="<?= $point['anchor'] ?>">
      <div class="misunderstanding"><a class="" href="#<?= $point['anchor'] ?>">
        <?= $point['misunderstanding'] ?>
      </a></div>
      <div class="understanding">
        <?= $point['understanding'] ?>
        <?php if (!empty($point['sources'])) : ?>
          <small class="sources">Sources: <?php foreach( $point['sources'] as $n=>$source ) { $num = $n+1; echo "<a href='{$source}'>[{$num}]</a> ";} ?></small>
        <?php endif; ?>
      </div>
    </li>
<?php endforeach; ?>

  </ul>

  <h2 class="subtitle">Resources</h2>
  <ul class="resources">
    <li><a href="https://flattenthecurve.com">https://flattenthecurve.com</a></li>
    <li><a href="https://staythefuckhome.com/">https://staythefuckhome.com</a></li>
    <li><a href="https://medium.com/@tomaspueyo/coronavirus-act-today-or-people-will-die-f4d3d9cd99ca">Coronavirus: Why You Must Act Now/</a></li>
  </ul>

  <h2 class="subtitle">Contribute</h2>
  <div>This is an <a href="https://github.com/emersonthis/coviddenial">open source project</a>.</div>
  <div>You can also <a href="mailto:emersonthis@gmail.com?subject=coviddenial.com">email me</a> comments or contributions.</div>
</body>

</html>

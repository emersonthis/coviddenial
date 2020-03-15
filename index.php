<?php

$points = [
  [
    'misunderstanding' => 'It\'s just the flu.',
    'understanding' => 'It isn\'t! The severity is more similar to pneumonia. Many patients require respiratory support. It is also more contagious than the common flu.',
    'anchor' => 'justflu'
  ],
  [
    'misunderstanding' => 'I\'m young and healthy so I don\'t need to care.',
    'understanding' => 'Young and healthy people are generally less likely to die if infected, but this is not the point! Treatable conditions easily become deadly if the health system collapses. We are not equipped to handle hundreds or thousands of respiratory patients at the same time. In places where the outbreak is full-blown, the medical facilities are completely overwhelmed. Patients are in hallways and gymnasiums. Doctors are being forced to ration limited resources like ventilators, oxygen, and even basic supplies like masks and gloves. You might be lucky, but it will likely be at the expense of others in your community.',
    'anchor' => 'younghealthy'
  ],
  [
    'misunderstanding' => 'There are no infections near me.',
    'understanding' => 'There are! But you cannot <strong>see</strong> them yet because there is a two week delay between the time of infection and when someone shows symptoms. During that time, the infected person is contagious and spreading the infection. For every single diagnosed case of COVID-19, there are hundreds of undiagnosed cases. For this reason, our only chance to avoid a massive public health disaster is if we take preventative measures <strong>before</strong> we see it everywhere.',
    'anchor' => 'notnear'
  ],
  // [
  //   'misunderstanding' => 'No emergency has been announced in my area.',
  //   'understanding' => 'This situation is unprecedented. No one wants to seem like an alarmist',
  //   'anchor' => 'noemergency'
  // ],
  [
    'misunderstanding' => 'I cannot afford to stay home or close my small business.',
    'understanding' => 'This is a public health <strong>and</strong> economic crisis. Everyone is impacted. All the evidence indicates that the pandemic will force most businesses to close soon whether we want to or not. Ideally, public officials will take decisive steps to mandate social distancing as it is currently one of the only tools available to <a target="_blank" href="https://www.flattenthecurve.com/">flatten the curve</a> of infections and save lives. We can\'t opt out of this pandemic, but we can opt out of unnecessary risk of infection. If a tsunami was coming towards your town, would you complain about the economic cost of evacuating? This outbreak is an invisible tsunami, but unlike the countries where it hit first, we have advanced warning. The US wasted much of that head start with inaction, but one of the lessons becoming increasingly clear is that every single day counts.',
    'anchor' => 'cantafford'
  ],
  [
    'misunderstanding' => 'The media is overblowing this. People are panicking.',
    'understanding' => 'There has been a lot of misinformation and the media is predisposed to fearmongering. But this does not change the fact that the situation is very serious. Panicking is dangerous and unproductive, but so is ignorance and inaction.',
    'anchor' => 'media'
  ],

];
?>

<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="style.css">

  <meta name="theme-color" content="deeppink">

  <link href="https://fonts.googleapis.com/css?family=Asap:400,700,700i&display=swap" rel="stylesheet">

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

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <!-- <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script> -->
</body>

</html>

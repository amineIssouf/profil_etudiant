<?php
require_once 'service_bdd.php';
connexionbdd();

?>





<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Ma Page Perso D'Amine - Carte moderne</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="wrap">
  <div class="hero">
    <div class="glow"></div>
    <div class="hero-inner">
      <div class="avatar">
        <!-- 📝 EDITER ICI : image -->
        <img src="Screenshot_20250330_190718_Instagram.jpg" alt="Ma photo">
      </div>
      <div>
        <!-- 📝 EDITER ICI : nom & phrase -->
        <h1>Amine Issouf</h1>
        <p class="subtitle">BTS SIO2 — Lycée Bamana — SLAM </p>
        <div class="tags">
          <span class="tag">Foot</span>
          <span class="tag">music</span>
          <span class="tag">jeux video</span>
        </div>
      </div>
    </div>
  </div>





  <div class="grid">
    <section id="desc">
      <h2>🙋 Description — Qui suis-je ?</h2>
      <!-- 📝 EDITER ICI -->
      <p>Je m'éclate devant les jeux vidéo et je suis toujours au rendez-vous pour regarder un bon match de foot !</p>
    </section>
    <section id="passions">
      <h2>🔥 Mes passions</h2>
      <!-- 📝 EDITER ICI -->
      <ul>
        <li>Foot</li>
        <li>jeux video</li>
        <li>music</li>
      </ul>
    </section>
    <section id="artistes">
      <h2>🎵 Top 3 artistes</h2>
      <!-- 📝 EDITER ICI -->
      <ol>
        <li>B2K</li><li>WALTER</li><li>Kaaris</li>
      </ol>
    </section>
    <section id="films">
      <h2>🎬 Top 3 séries/films</h2>
      <!-- 📝 EDITER ICI -->
      <ol>
        <li>TRRIGER</li><li>Chaos</li><li>ALICE</li>
      </ol>
    </section>
    <section id="projets">
      <h2>🚀 Projets / ambitions</h2>
      <!-- 📝 EDITER ICI -->
      <p>Ma passion pour le jeu vidéo est telle qu'elle est devenue une ambition : mon objectif est de créer mon propre jeu. Je souhaite explorer les processus de conception (game design), de programmation, pour transformer une idée en une véritable expérience .</p>
    </section>
    <form action="aceuil.php">
      <button>ajouter un etudiant</button>
        
    </form>
  </div>

  <footer>&copy; <span id="y"></span> Amine Issouf Abdou Mouhoudhoir</footer>
</div>
<script>document.getElementById('y').textContent=new Date().getFullYear()</script>
</body>
</html>
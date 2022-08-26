<h1>Liste des annonces</h1>

<?php foreach($annonces as $annonce): ?>
<article>
    <h2><a href="/annonces/lire/<?=$annonce->id?>"> <?= $annonce->titre ?></a></h2>
    <div>
        <p><?= $annonce->description ?></p>
    </div>
</article>
<?php endforeach; ?>
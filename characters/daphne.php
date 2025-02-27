<?php 
$characterName = "Daphne Bridgerton";
include '../header.php'; 

?>
<style>
    /* Custom CSS for Daphne's Page */
    .character-profile {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem;
        font-family: 'Georgia', serif;
        color: #333;
    }

    .character-profile img {
        width: 300px;
        float: right;
        margin: 0 0 2rem 2rem;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .bio {
        line-height: 1.8;
        margin-bottom: 3rem;
    }

    h1, h2, h3 {
        font-family: 'Playfair Display', serif;
        color: #2a2a2a;
        margin: 1.5rem 0;
    }

    h1 {
        color: #3a3a3a;
        border-bottom: 2px solid #e0c8a9;
        padding-bottom: 0.5rem;
        font-size: 2.5rem;
    }

    h2 {
        color: #4a4a4a;
        font-size: 2rem;
    }

    h3 {
        font-size: 1.5rem;
        color: #5a5a5a;
    }

    .user-take {
        background-color: #f8f5f2;
        padding: 2rem;
        border-radius: 8px;
        clear: both;
    }

    form {
        margin: 1rem 0;
    }

    textarea {
        width: 100%;
        padding: 1rem;
        border: 1px solid #ddd;
        border-radius: 4px;
        min-height: 150px;
        margin: 1rem 0;
        font-family: 'Georgia', serif;
    }

    button {
        background-color: #8a6d5b;
        color: white;
        padding: 0.8rem 2rem;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #6b5243;
    }

    .previous-opinions {
        margin-top: 2rem;
        padding: 1rem;
        background-color: white;
        border-radius: 4px;
    }

    @media (max-width: 768px) {
        .character-profile img {
            float: none;
            width: 100%;
            margin: 0 0 1rem 0;
        }
        
        .character-profile {
            padding: 1rem;
        }
    }
</style>
<main class="character-profile">
<h2><?php echo $characterName; ?></h2>
<img src="daphne.png" alt="Daphne Bridgerton">
<div class="bio">
<h3>About Daphne</h3>
<p>Daphne is the fourth Bridgerton child and eldest daughter...</p>
<p>  
<h1>Daphne Bridgerton: A Timeless Tale of Love, Strength, and Defying Expectations</h1> 
<p>
Daphne Bridgerton’s journey begins as every debutante’s dream—stepping into the grand ballrooms of Regency-era London, eager to make a brilliant match. As the eldest Bridgerton daughter, she is expected to marry well, not just for love, but for duty. With charm, beauty, and the firm backing of her influential family, she seems destined for the perfect suitor. But as Daphne soon learns, society’s expectations and personal desires rarely align so neatly.  </p>
<p>
What makes Daphne’s story inspiring is not just her pursuit of romance but her quiet defiance of the rigid rules placed upon her. In a world where women were valued primarily for their ability to secure a good marriage, Daphne insists on something more—genuine love, mutual respect, and a relationship built on equality rather than mere obligation.  </p>
<p>
Her relationship with Simon, the Duke of Hastings, is filled with misunderstandings, passion, and the struggle to balance love with pride. But at its core, Daphne’s story is about learning, adapting, and fighting for happiness on her own terms. She does not settle, nor does she allow societal pressures to dictate her future.  </p>

<h2>Why Her Story Still Matters Today  </h2>
<p>
Daphne’s journey mirrors the struggles many face in modern relationships—navigating expectations, understanding emotional barriers, and striving for a partnership built on trust rather than external validation. Today, women continue to challenge outdated norms, whether it’s in love, career, or personal identity. The pressure to "have it all" while meeting societal standards of success and femininity still exists, just in different forms. </p> 
<p>
Daphne’s story reminds us that while traditions may shape us, they do not have to define us. She proves that strength isn’t always about rebellion—it’s also about grace, resilience, and knowing when to stand firm for what you deserve.  
</p>
<p>
Her world may be filled with carriages and corsets, but her journey of self-discovery and love is one that resonates far beyond the Regency era.  
</p>
</p>
</div>

<div class="user-take">
    <h3>YOUR TAKE</h3>
    <form action="/submit_opinion.php" method="POST">
        <input type="hidden" name="character" value="daphne">
        <textarea name="opinion" placeholder="Share your thoughts..." required></textarea>
        <button type="submit">Submit</button>
    </form>

    <div class="previous-opinions">
        <h4>What Others Are Saying</h4>
        <?php
        // Display previous opinions
        $file = "../opinions/daphne_opinions.txt";
        if (file_exists($file)) {
            $opinions = file_get_contents($file);
            // Sanitize output to prevent XSS
            echo nl2br(htmlspecialchars($opinions));
        } else {
            echo "<p>No opinions yet. Be the first to share your thoughts!</p>";
        }
        ?>
    </div>
</div>
</main>

<?php include '../footer.php'; ?>
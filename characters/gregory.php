<?php 
$characterName = "Gregory Bridgerton";
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
<img src="gregory.jpg" alt="Gregory Bridgerton">
<div class="bio">
<h3>About Gregory</h3>
<p>Gregory is the seventh child and the foruth son of the Bridgerton household...</p>
<p>  
<h1>Gregory Bridgerton: A Story of Hope, Romantic Ideals, and Learning What Love Truly Means</h1> 
<p>
Gregory Bridgerton is a dreamer. Unlike his older brothers, who approach love with either duty or reluctance, Gregory believes in romance—the kind found in storybooks and whispered promises. He is young, idealistic, and utterly convinced that love, when true, is simple and undeniable. But as he grows older, he learns that love is far more complex than he once imagined.  </p>
<p>
Gregory’s journey is one of chasing a perfect romance, only to realize that real love is not about grand gestures or effortless attraction. It is about understanding, timing, and seeing beyond first impressions. He starts off infatuated with the idea of love itself, but through heartbreak, unexpected twists, and personal growth, he discovers that love is not just about finding someone perfect—it’s about finding someone who truly sees you, challenges you, and chooses you, even when life is not easy.  </p>
<p>
Unlike his siblings, who have spent years navigating the pressures of society and duty, Gregory’s struggle is different. His challenge is not in resisting love but in learning what it really means. His journey is one of innocence turning into wisdom, of learning that love isn’t always instant or straightforward—but when it is right, it is worth everything.  </p>

<h2>Why His Story Still Matters Today  </h2>
<p>
Gregory’s idealism reflects the hopes many have when it comes to love. In a world filled with dating apps, fleeting connections, and societal pressures to "settle down," his story is a reminder that love is not about perfection—it’s about depth, honesty, and the willingness to fight for something real. </p> 
<p>
He also speaks to the journey of growing up, of realizing that what we think we want is not always what we need. His story mirrors the experiences of many young people today who believe love will happen effortlessly, only to learn that relationships require patience, compromise, and a deeper understanding of oneself.
</p>
<p>
Though he lives in a world of arranged marriages and grand romances, Gregory Bridgerton’s search for love is timeless. He teaches us that love is not about finding a fantasy—it’s about finding something true, and sometimes, that means looking beyond what we once imagined. His story is a reminder that love is a journey, not a destination, and that the most beautiful love stories are the ones that surprise us, challenge us, and ultimately, change us for the better.  
</p>
</p>
</div>

<div class="user-take">
    <h3>YOUR TAKE</h3>
    <form action="/submit_opinion.php" method="POST">
        <input type="hidden" name="character" value="gregory">
        <textarea name="opinion" placeholder="Share your thoughts..." required></textarea>
        <button type="submit">Submit</button>
    </form>

    <div class="previous-opinions">
        <h4>What Others Are Saying</h4>
        <?php
        // Display previous opinions
        $file = "../opinions/gregory_opinions.txt";
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
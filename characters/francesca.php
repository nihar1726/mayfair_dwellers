<?php 
$characterName = "Francesca Bridgerton";
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
<img src="francesca.jpg" alt="Francesca Bridgerton">
<div class="bio">
<h3>About Francesca</h3>
<p>Francesca is the sixth child and thirds daughter of Bridgerton household ...</p>
<p>  
<h1>Francesca Bridgerton: A Story of Quiet Strength, Self-Discovery, and Embracing One’s Own Path</h1> 
<p>
Unlike her boisterous siblings, Francesca Bridgerton moves through the world with quiet grace. She is reserved yet deeply thoughtful, often observing rather than taking center stage. While the Bridgertons are known for their charm and presence in high society, Francesca is different—she values solitude, introspection, and a life that isn’t dictated by the expectations of the ton.  </p>
<p>
But being different in a family as lively as the Bridgertons isn’t always easy. Francesca’s journey is not one of grand rebellion or defying societal norms in bold ways; instead, it is a quieter kind of defiance—the courage to live life on her own terms, even if it doesn’t align with what others expect. She isn’t one to seek the spotlight, nor does she fit neatly into the mold of the ideal debutante, yet she still craves love, happiness, and a sense of belonging.  </p>
<p>
Her story is one of deep emotions, resilience through loss, and the understanding that love comes in many forms. Francesca shows that strength isn’t always loud or dramatic—sometimes, it’s found in quiet endurance, in choosing a different path, and in embracing who you truly are, even when the world tries to define you differently.  </p>

<h2>Why Her Story Still Matters Today  </h2>
<p>
Francesca’s journey speaks to those who feel different from the world around them—introverts in a world that often values extroversion, individuals who take time to find their place, and those who quietly carve out a life of meaning and depth. </p> 
<p>
Her story is a reminder that there is no single way to be strong, no singular path to love and fulfillment. In an era that often celebrates loud success and constant connection, Francesca teaches us the beauty of quiet ambition, the power of patience, and the importance of honoring one’s own desires—even when they don’t match what society expects.  
</p>
<p>
Though she walks through ballrooms and grand estates, Francesca Bridgerton’s journey is timeless. She reminds us that being different isn’t a weakness—it’s simply another way of being remarkable. Her story is a testament to the strength of the human spirit, the resilience of the heart, and the courage it takes to live life on your own terms.
</p>
</p>
</div>

<div class="user-take">
    <h3>YOUR TAKE</h3>
    <form action="/submit_opinion.php" method="POST">
        <input type="hidden" name="character" value="francesca">
        <textarea name="opinion" placeholder="Share your thoughts..." required></textarea>
        <button type="submit">Submit</button>
    </form>

    <div class="previous-opinions">
        <h4>What Others Are Saying</h4>
        <?php
        // Display previous opinions
        $file = "../opinions/francesca_opinions.txt";
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
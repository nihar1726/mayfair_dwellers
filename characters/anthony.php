<?php 
$characterName = "Anthony Bridgerton";
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
<img src="anthony.jpg" alt="Anthony Bridgerton">
<div class="bio">
<h3>About Anthony</h3>
<p>Anthony is the eldest son and child in the Bridgerton household...</p>
<p>  
<h1>Anthony Bridgerton: A Story of Duty, Love, and Breaking Free from Expectations</h1> 
<p>
From the moment Anthony Bridgerton became Viscount, his life was no longer his own. As the eldest Bridgerton sibling, he carried the weight of responsibility on his shoulders—protecting his family, securing their future, and upholding the legacy left behind by his late father. To Anthony, love was not a luxury he could afford. Duty came first, always.  </p>
<p>
Determined to find a suitable wife rather than a love match, Anthony approaches marriage like a business arrangement—seeking a woman who is accomplished, well-mannered, and, above all, incapable of breaking his carefully built emotional walls. Enter Kate Sharma, the one person who challenges his every belief.  </p>
<p>
Anthony’s journey is one of self-discovery, learning that love is not a weakness, nor is vulnerability something to fear. His relationship with Kate is filled with tension, unspoken desires, and the struggle between duty and heart. But through her, he realizes that true strength lies in allowing oneself to feel deeply, to love fiercely, and to embrace happiness, even when it feels terrifying.  </p>

<h2>Why His Story Still Matters Today  </h2>
<p>
Anthony’s struggle with responsibility, expectations, and emotional repression is one many can relate to, especially in today’s world. How often do we prioritize career, family obligations, or societal pressures over our own happiness? How many of us fear vulnerability, believing it to be a sign of weakness rather than strength? </p> 
<p>
His story is a reminder that no matter how much we try to control life, love has a way of finding us—and when it does, we must be brave enough to let it in. Anthony’s journey shows that duty and love don’t have to be at odds; in fact, the strongest leaders, partners, and individuals are those who embrace both.  
</p>
<p>
Though his world is one of duels and grand estates, Anthony Bridgerton’s struggles and triumphs feel just as relevant today as they did in Regency-era London. His story is not just about finding love—it’s about learning to truly live. 
</p>
</p>
</div>

<div class="user-take">
    <h3>YOUR TAKE</h3>
    <form action="/submit_opinion.php" method="POST">
        <input type="hidden" name="character" value="anthony">
        <textarea name="opinion" placeholder="Share your thoughts..." required></textarea>
        <button type="submit">Submit</button>
    </form>

    <div class="previous-opinions">
        <h4>What Others Are Saying</h4>
        <?php
        // Display previous opinions
        $file = "../opinions/anthony_opinions.txt";
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
<?php 
$characterName = "Colin Bridgerton";
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
<img src="colin.jpg" alt="Colin Bridgerton">
<div class="bio">
<h3>About Colin</h3>
<p>Colin is the third son and child of Bridgerton household...</p>
<p>  
<h1>Colin Bridgerton: A Story of Adventure, Identity, and Finding One’s True Path</h1> 
<p>
Colin Bridgerton has always been the charming, easygoing member of his family—the younger brother who travels the world, avoids responsibility, and seems to have life figured out. But beneath his carefree exterior lies a man searching for something more. While his siblings settle into their roles within society, Colin wrestles with a deeper question: Who am I beyond my family name?  </p>
<p>
His love for travel is more than just a hobby—it’s an escape from the expectations placed upon him as a Bridgerton. He yearns for adventure, for purpose, for something that will set him apart. But upon returning to London, Colin realizes that running away isn’t the same as moving forward. And sometimes, the answers we seek aren’t in far-off lands but right in front of us.  </p>
<p>
His journey takes an unexpected turn when he begins to see Penelope Featherington—the childhood friend he once overlooked—in a new light. Through her, Colin learns that true adventure isn’t always about grand travels or bold gestures; sometimes, it’s about looking within, confronting your own flaws, and recognizing the love and support that has been there all along.  </p>

<h2>Why His Story Still Matters Today  </h2>
<p>
Colin’s struggle is deeply relatable—many of us feel the pressure to find our purpose, to stand out in a world where everyone seems to have a clear direction. His story speaks to the restlessness of youth, the desire to carve out an identity beyond what others expect, and the realization that fulfillment isn’t found in constant movement but in meaningful connections. </p> 
<p>
In a time when social media and external validation often define success, Colin reminds us that real growth comes from within. His journey shows that it's okay to feel lost, to take time to discover who you truly are, and that sometimes, love and purpose are found in the places we least expect.
</p>
<p>
Though his world is one of grand estates and high society, Colin’s search for identity and belonging is timeless. He teaches us that the greatest adventure of all is not in where we go, but in who we become.  
</p>
</p>
</div>

<div class="user-take">
    <h3>YOUR TAKE</h3>
    <form action="/submit_opinion.php" method="POST">
        <input type="hidden" name="character" value="colin">
        <textarea name="opinion" placeholder="Share your thoughts..." required></textarea>
        <button type="submit">Submit</button>
    </form>

    <div class="previous-opinions">
        <h4>What Others Are Saying</h4>
        <?php
        // Display previous opinions
        $file = "../opinions/colin_opinions.txt";
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
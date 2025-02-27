<?php 
$characterName = "Eloise Bridgerton";
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
<img src="eloise.jpg" alt="Eloise Bridgerton">
<div class="bio">
<h3>About Eloise</h3>
<p>Eloise is the fifth bridgerton child and second daughter of Bridgerton Household...</p>
<p>  
<h1>Eloise Bridgerton: A Story of Independence, Rebellion, and Redefining Womanhood</h1> 
<p>
Eloise Bridgerton has never been one to follow the rules. In a world where young women are expected to marry well, attend endless balls, and embrace the quiet life of a dutiful wife, Eloise refuses to conform. She is outspoken, fiercely intelligent, and more interested in books and social change than in courtship and gossip. While her peers dream of romance, she dreams of independence—of a life where she is valued for her mind, not just her ability to attract a suitor.  </p>
<p>
Her resistance to society’s expectations is both her strength and her struggle. While she prides herself on being different, she also wrestles with feelings of loneliness and uncertainty. What happens when the world you reject is the only one you know? And what if love, which she so adamantly dismisses, isn’t the cage she imagined but something altogether different?  </p>
<p>
As she embarks on a journey of self-discovery, Eloise realizes that independence and connection aren’t mutually exclusive. She can be strong, ambitious, and intelligent while still embracing love and vulnerability—on her own terms.  </p>

<h2>Why Her Story Still Matters Today  </h2>
<p>
Eloise’s fight against societal norms mirrors the struggles many women still face today—the pressure to follow a traditional path, the expectations of femininity, and the challenge of balancing ambition with personal fulfillment. Her story resonates with anyone who has ever questioned the status quo, felt out of place in their own world, or struggled to define success on their own terms. </p> 
<p>
At a time when women continue to push for equality, representation, and the right to live authentically, Eloise serves as a reminder that rebellion isn’t just about rejecting traditions—it’s about reshaping them to fit who we truly are.
</p>
<p>
Though she lives in a world of carriages and corsets, Eloise Bridgerton’s story is one of modern relevance. She teaches us that being different isn’t a flaw—it’s a strength, and the key to finding true happiness is forging your own path, no matter where it leads. 
</p>
</p>
</div>

<div class="user-take">
    <h3>YOUR TAKE</h3>
    <form action="/submit_opinion.php" method="POST">
        <input type="hidden" name="character" value="eloise">
        <textarea name="opinion" placeholder="Share your thoughts..." required></textarea>
        <button type="submit">Submit</button>
    </form>

    <div class="previous-opinions">
        <h4>What Others Are Saying</h4>
        <?php
        // Display previous opinions
        $file = "../opinions/eloise_opinions.txt";
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
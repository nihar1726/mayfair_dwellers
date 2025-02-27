<?php 
$characterName = "Benedict Bridgerton";
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
<img src="benedict.jpeg" alt="Benedict Bridgerton">
<div class="bio">
<h3>About Benedict</h3>
<p>Benedict is the second son and child of Bridgerton household</p>
<p>  
<h1>Benedict Bridgerton: A Journey of Self-Discovery, Art, and Defying Convention</h1> 
<p>
Benedict Bridgerton has never quite fit the mold of high society. As the second-born son, he is free from the pressures of the viscountcy, yet he remains trapped in a world that values titles and wealth over individuality and passion. Unlike his siblings, who follow the expected paths of marriage and duty, Benedict dreams of something different—of art, freedom, and a life unconstrained by rigid social rules.  </p>
<p>
While the ton sees him as just another eligible Bridgerton, Benedict longs to be recognized for his talent rather than his family name. His journey takes him beyond the glittering ballrooms of Mayfair and into the hidden corners of London’s artistic world, where creativity thrives, and the rules of high society hold less power. It is there that he begins to question everything—his place in the world, his understanding of love, and what it truly means to belong.  </p>

<h2>Why His Story Still Matters Today  </h2>
<p>
Benedict’s struggle is one that many face today—the search for identity in a world that often pushes conformity. Whether it’s choosing an unconventional career, embracing creativity over practicality, or questioning the expectations placed upon us, his story resonates with anyone who has ever felt like they don’t quite belong. </p> 
<p>
In a modern world that still tries to define success in narrow terms, Benedict reminds us that happiness isn’t found in following a predetermined path—it’s in forging our own. He challenges the idea that privilege guarantees fulfillment, proving that true contentment comes from living authentically, even if it means defying expectations.  
</p>
<p>
Though his story is set in a time of strict social hierarchy, Benedict’s desire for self-expression, purpose, and love beyond status is just as relevant now as it was then. He teaches us that breaking free from societal norms isn’t about rebellion—it’s about the courage to be yourself. And in a world that often demands conformity, that’s a lesson worth remembering. 
</p>
</p>
</div>

<div class="user-take">
    <h3>YOUR TAKE</h3>
    <form action="/submit_opinion.php" method="POST">
        <input type="hidden" name="character" value="benedict">
        <textarea name="opinion" placeholder="Share your thoughts..." required></textarea>
        <button type="submit">Submit</button>
    </form>

    <div class="previous-opinions">
        <h4>What Others Are Saying</h4>
        <?php
        // Display previous opinions
        $file = "../opinions/benedict_opinions.txt";
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
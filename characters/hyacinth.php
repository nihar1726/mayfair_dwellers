<?php 
$characterName = "Hyacinth Bridgerton";
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
<img src="hyacinth.jpg" alt="Hyacinth Bridgerton">
<div class="bio">
<h3>About Hyacinth</h3>
<p>Hyacinth is the youngest child in the Bridgerton household...</p>
<p>  
<h1>Hyacinth Bridgerton: A Story of Wit, Boldness, and Carving One’s Own Path</h1> 
<p>
Hyacinth Bridgerton is not one to fade into the background. The youngest of the Bridgerton siblings, she is sharp, fearless, and always ready with a quick remark. Unlike her sisters, who wrestle with society’s expectations in their own ways, Hyacinth meets them head-on—with wit, determination, and an unwillingness to be anything less than her true self.  </p>
<p>
She refuses to be just another debutante waiting to be chosen. Hyacinth is intelligent, curious, and never afraid to speak her mind, even when it lands her in trouble. While others might tread carefully in high society, she charges forward, unwilling to conform to the expectations placed upon young women. But beneath her confidence lies a heart that, like her siblings before her, longs for a love that is both exciting and deeply real. </p>
<p>
Her journey is one of learning that strength does not mean closing oneself off—that love, when matched with the right person, can be both thrilling and grounding. Hyacinth’s story is about finding someone who can keep up with her, challenge her, and celebrate her uniqueness rather than tame it.  </p>

<h2>Why Her Story Still Matters Today  </h2>
<p>
Hyacinth embodies the spirit of modern women who refuse to be boxed in by tradition or expectation. In a world that still tries to tell women how to behave, when to settle down, and what roles to play, she is a reminder that being bold, outspoken, and ambitious is something to be celebrated, not stifled. </p> 
<p>
Her story resonates with those who don’t want to fit into a mold, who believe that intelligence and independence should never be sacrificed for acceptance. She shows that being strong-willed and opinionated does not make one unlovable—it simply means finding someone who values those qualities rather than fears them.  
</p>
<p>
Though she lives in an era of arranged marriages and rigid social rules, Hyacinth Bridgerton’s story is one of timeless empowerment. She reminds us that life is meant to be lived boldly, love should be met with equal passion, and the best journeys are those where we stay true to ourselves.
</p>
</p>
</div>

<div class="user-take">
    <h3>YOUR TAKE</h3>
    <form action="/submit_opinion.php" method="POST">
        <input type="hidden" name="character" value="hyacinth">
        <textarea name="opinion" placeholder="Share your thoughts..." required></textarea>
        <button type="submit">Submit</button>
    </form>

    <div class="previous-opinions">
        <h4>What Others Are Saying</h4>
        <?php
        // Display previous opinions
        $file = "../opinions/hyacinth_opinions.txt";
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
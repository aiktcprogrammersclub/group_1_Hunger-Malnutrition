<?php require('includes/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Blog</title>
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/main.css">
	<script src="script/myscript.js"></script>
</head>
<body>
	<div id ='title'>
      <h1>Hunger Relief Foundation</h1>
      <h2> BLOG  </h2>
	</div>
		</br></br>
		<div id='main'>
		
			<div id="mainpage">
			<ul class="posts">
			<?php
					//$newpassword = 'demo';
					//echo $user->password_hash($newpassword, PASSWORD_BCRYPT);
				try {

					$pages = new Paginator('9','p');

					$stmt = $db->query('SELECT postID FROM blog_posts_seo');

					//pass number of records to
					$pages->set_total($stmt->rowCount());

					$stmt = $db->query('SELECT postID, postTitle, postSlug, postDesc, postDate FROM blog_posts_seo ORDER BY postID DESC '.$pages->get_limit());
					while($row = $stmt->fetch()){



								$stmt2 = $db->prepare('SELECT catTitle, catSlug	FROM blog_cats, blog_post_cats WHERE blog_cats.catID = blog_post_cats.catID AND blog_post_cats.postID = :postID');
								$stmt2->execute(array(':postID' => $row['postID']));

								$catRow = $stmt2->fetchAll(PDO::FETCH_ASSOC);

								$links = array();
								foreach ($catRow as $cat)
								{
								    $links[] = "<a href='c-".$cat['catSlug']."'>".$cat['catTitle']."</a>";
								}
								echo implode(", ", $links);

							echo '<li>';
							echo $row['postDesc'];				
							echo '<a href="'.$row['postSlug'].'">';
							echo '<h2><a href="'.$row['postSlug'].'">'.$row['postTitle'].'</a></h2>';
							echo '<p>'.date('jS M Y H:i:s', strtotime($row['postDate'])).' </li> ';
					}

					echo $pages->page_links();

				} catch(PDOException $e) {
				    echo $e->getMessage();
				}
			?>
			<ul>
			</div>
		</div>
		
		<div id='clear'></div>

	</div>
	
</section>
</body>
</html>
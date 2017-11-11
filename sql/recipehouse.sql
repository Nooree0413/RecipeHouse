-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2017 at 08:51 AM
-- Server version: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `recipehouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `comm_id` int(10) NOT NULL AUTO_INCREMENT,
  `comm_useremail` varchar(30) NOT NULL,
  `comm_text` varchar(300) NOT NULL,
  `comm_time` varchar(30) NOT NULL,
  `comm_recid` int(3) NOT NULL,
  PRIMARY KEY (`comm_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE IF NOT EXISTS `recipe` (
  `recipe_id` int(5) NOT NULL AUTO_INCREMENT,
  `recipe_name` varchar(100) NOT NULL,
  `recipe_date` date NOT NULL,
  `recipe_region` varchar(30) NOT NULL,
  `recipe_description` longtext NOT NULL,
  `recipe_ingredients` longtext NOT NULL,
  `recipe_yield` varchar(20) NOT NULL,
  `recipe_preptime` varchar(20) NOT NULL,
  `recipe_cooktime` varchar(20) NOT NULL,
  `recipe_totaltime` varchar(20) NOT NULL,
  `recipe_directions` longtext NOT NULL,
  `recipe_category` varchar(20) NOT NULL,
  `recipe_imgurl1` varchar(100) NOT NULL,
  `recipe_imgurl2` varchar(100) NOT NULL,
  `recipe_imgurl3` varchar(100) NOT NULL,
  `recipe_imgurl4` varchar(100) NOT NULL,
  `rec_commentcount` int(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`recipe_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`recipe_id`, `recipe_name`, `recipe_date`, `recipe_region`, `recipe_description`, `recipe_ingredients`, `recipe_yield`, `recipe_preptime`, `recipe_cooktime`, `recipe_totaltime`, `recipe_directions`, `recipe_category`, `recipe_imgurl1`, `recipe_imgurl2`, `recipe_imgurl3`, `recipe_imgurl4`, `rec_commentcount`) VALUES
(1, 'Middle Eastern Roast', '2015-03-02', 'Eastern', 'Truthfully, you could spatchcock a chicken, rub some olive oil on it, season it liberally with kosher salt and pepper, stick it in the oven, and stop right there. I''m a big fan of seriously simple roast chickens. But I''m an even bigger fan of this Middle Eastern spatchcocked roast chicken complete with roast potatoes, caramelized leeks, and carrots.\n					It''s one of those dinners that just takes care of itself. Everything comes together in one roasting pan with minimal clean up and effort.\n					Add a side salad (or loaf of crusty, good-quality bread) and you''re good to go.\n	           \n					<p>The trick to this recipe is the spice rub. This Middle Eastern spice rub is everything.  It''s delicate, warm, and incredibly tasty.\n					It does require quite a few spices (nine in total!), but these are everyday spices that I (and most likely you) keep on hand already. Ground cumin, coriander, cinnamon, nutmeg, cardamom, paprika, allspice, cloves, and turmeric.</p>', '<p>\n								Middle Eastern Spice Rub:<br/><br/>\n											\n								1/2 teaspoon ground sweet paprika<br/>\n								1/2 teaspoon ground cumin<br/>\n								1/2 teaspoon ground coriander<br/>\n								1/2 teaspoon ground allspice<br/>\n								1/4 teaspoon ground cinnamon<br/>\n								1/4 teaspoon ground nutmeg<br/>\n								1/4 teaspoon ground cloves<br/>\n								1/4 teaspoon ground cardamom<br/>\n								1/4 teaspoon ground turmeric<br/>\n								\n								</p>\n								\n								Roast Chicken and Vegetables:\n								\n								<p>\n								3 medium red potatoes, quartered (roughly 1 lb)<br/>\n								4-5 medium carrots (roughly 1/2 lb), scrubbed well, sliced lengthwise, and cut into 3-4 inch pieces<br/>\n								2 medium leeks, white and light green parts only (stalks discarded), sliced lengthwise in half<br/>\n								3/4 cup low-sodium chicken broth<br/>\n								kosher salt<br/>\n								freshly ground black pepper<br/>\n								1 (4.5 - 5 lb) organic whole chicken (without giblets)<br/>\n								1 batch of Middle Eastern spice blend<br/>\n								extra virgin olive oil<br/>\n								</p>', '6', '0 Hour 15 Minutes', '1 Hour 30 Minutes', '1 Hour 45 Minutes', '<ol>\r\n									<li>Preheat the oven to 425 degrees Fahrenheit with a rack in the center position.</li><br/>\r\n									<li>Remove the chicken from its packaging (remove the giblets, if they came with the bird), and pat dry with paper towels. In a small bowl, whisk together the spice blend until combined. Reserve roughly one teaspoon for the vegetables.</li>  <br/>\r\n									<li>Follow these detailed instructions on how to spatchcock the chicken. Place the chicken, skin side up, on a large cutting board. Drizzle the chicken with olive oil and rub on the skin. Sprinkle and rub the spice mixture all over the chicken. Season the chicken liberally on both sides with salt and pepper. *Note: It is best to remove the chicken from the fridge at least 3o to 45 minutes before roasting, this will help produce crispier skin.</li> <br/>\r\n									<li>Combine the vegetables in a small to medium roasting pan. Drizzle them lightly with olive oil and sprinkle with the remaining spice mixture. Pour the chicken broth over the vegetables, and spread the vegetables and potatoes into an even layer. Set a roasting rack on top of the vegetables, and place the spatchcocked chicken, skin-side up, on the rack. It should lay mostly flat.</li><br/>\r\n									<li>Roast until the skin is crispy and golden brown, and the thickest part of the breasts and legs read 157 degrees F with an instant thermometer. The temperature will raise by 8 to 10 degrees as the chicken sits and rests.</li><br/>\r\n									<li>Remove the roasting pan from the oven and using oven mitts, carefully remove the roasting rack with the chicken and set on top of a large, clean cutting board. Stir the vegetables and roast (425 degrees F) for an additional 12 to 15 minutes as the chicken rests (this will help finish the cooking and help them caramelize evenly), or until caramelized and fork tender. If the pan looks very dry, add an additional 1/4 cup to 1/2 cup of chicken broth before placing back in the oven.</li><br/>\r\n									<li>As the vegetables are finishing roasting, carve the chicken. Using a sharp carving knife, remove the legs. Using the breastbone as a guide, remove each chicken breast from the bone. Slice each breast against the grain into 1/2-inch to 3/4 inch-thick pieces. Serve hot with the warm roasted vegetables on the side.</li><br/>\r\n								</ol>', 'Main Course', 'images/middle eastern roast chicken with vegetables.jpg', '', '', '', 0),
(2, 'Indian Spiced Potatoes With Chicken Thighs', '2015-03-27', 'Indian', 'Roasting the chicken on top of these spice-packed spuds means you get the full whack of flavour as the juices seep into the potatoes.\n', '<p>\r\n								800 g potatoes<br/>\r\n								1 aubergine<br/>\r\n								1 red pepper<br/>\r\n								1 large onion<br/>\r\n								2 cloves of garlic<br/>\r\n								5cm piece of ginger<br/>\r\n								1/2 a bunch of fresh coriander<br/>\r\n								olive oil<br/>\r\n								2 tablespoon mustard seeds<br/>\r\n								1 handful of curry leaves<br/>\r\n								1 heaped teaspoon turmeric<br/>\r\n								6 large free-range chicken thighs, bone in<br/>\r\n								2 fresh red or green chillies<br/>\r\n								poppadoms<br/>\r\n								\r\n								</p>\r\n								\r\n								<h3>Yogurt dressing:</h3>\r\n								\r\n								<p>\r\n								1/2 cup (140g) thick Greek-style yoghurt<br/>\r\n								1 small bunch mint, leaves picked<br/>\r\n								1cm piece ginger (5g)<br/>\r\n								1 long green chilli, chopped<br/>\r\n								Juice of 1/2 lemon<br/>\r\n								</p>', '6', '0 Hour 45 Minutes', '1 Hour 00 minutes', '1 Hour 45 minutes', '<ol>\n									<li>Preheat the oven to 190&#176;C/375&#176;F/gas 5.</li></br>\n									<li>Cut the potatoes, tomatoes, aubergine, pepper and onion (peel it first) into 3cm cubes.</li><br/>\n									<li>Put the spuds in a large pan of salted water over a medium heat. Bring to the boil and cook for 10 minutes, then drain in a colander and leave to steam-dry for 3 minutes.</li><br/>\n									<li>Tip into a large bowl and mix with the tomato, aubergine, pepper and onion.</li><br/>\n									<li>Peel and finely slice the garlic. Peel and finely grate the ginger. Pick the coriander leaves and set aside, then chop the stalks.</li><br/>\n									<li>Heat a lug of oil in a large frying pan over a medium heat. Add the garlic, ginger, coriander stalks, mustard seeds, curry leaves and turmeric and cook for 2 minutes, or until fragrant. Leave to one side to cool slightly.</li><br/>\n									<li>Add the spice mix to the veg and potatoes and tip onto a large roasting tray. Arrange the chicken on top and season.</li><br/>\n									<li>Roast in the bottom of the oven for 1 hour, or until the chicken is cooked and the veggies are gnarly.</li><br/>\n									<li>Pick the mint leaves into a blender, squeeze in the lemon juice, then peel and add the ginger with the remaining dressing ingredients and a pinch of seasoning. Blitz until smooth.</li><br/>\n									<li>Top the chicken and potatoes with the coriander leaves. Finely slice and scatter on the chillies, then serve with poppadoms and the dressing on the side.</li><br/>\n								</ol>', 'Main Course', 'images/Indian spiced potatoes with chicken thighs.jpg', '', '', '', 0),
(3, 'Mexican Hash Brown Stack', '2016-05-15', 'Mexican', 'Breakfast, or better yet, breakfast for dinner is served.			Though that recipe is equally as delicious in its own way, albeit very different, the two recipes do share something in common: a crispy potato base. In culinary school, we came to know this as a pommes darphin, but in reality, it is very similar to a large, round crispy hash brown.\n<p>								There are a few tricks to achieving a good hash brown base for this dish:\n</p>\n\n						\n						<p>\n								Grate the potato very quickly (as it will oxidize immediately) and work with just one potato (aka. one hash brown) at a time.\n								Do not soak the potato in water. You want to remove the excess moisture from the grated potato, but not the starch-as it will allow you to create a pancake-like hash brown that holds together.\n								Use a neutral, high-smoke point oil, such as grapeseed, safflower, or canola-or better yet, clarified butter-to cook the potato.\n								Watch the pan carefully, adjust the heat as necessary throughout the cooking process, and flip gently.\n								To keep the potatoes warm and crisp, hold them in a 275 degree oven (on a rack set on top of a baking sheet) as you prepare the rest of the recipe. No one likes a cold hash brown.\n						</p>\n						<p>\n								Mexican Hash Brown Stack. Crispy potato topped with sunny-side eggs, sliced avocado, homemade pico de gallo, and crumbled queso fresco cheese! \n								The hash brown base is the most technical aspect of this recipe. The rest comes together very quickly and is very straight-forward! Although you could easily buy a fresh pico de gallo from the store, you''d be surprised just how easy it is to make from scratch.\n\n								It takes just 10 minutes or so, tastes infinitely better, and if you''re anything like me during the summer months, you already have fresh tomatoes lying around on your kitchen countertop.\n\n								My only request is that you use fresh pico de gallo-and not jarred salsa-for this recipe. It''s a must!\n						</p>\n						<p>\n								The next step? Cook up the eggs! I topped the hash brown base with sunny-side eggs, but feel free to prepare them as you like. Easy over, fried, or poached would work just as well!\n						</p>\n						<p>	\n								Assemble.<br/><br/>\n\n								Devour.<br/><br/>\n\n								Repeat.<br/><br/>\n						</p>', '<br/>\n								<p>\n2-3 medium vine-ripened tomatoes (8 ounces), cored, de-seeded and diced<br/>\n										1/4 cup finely chopped red onion (roughly 1/4 medium onion)<br/>\n										1/4 cup packed fresh cilantro leaves, roughly chopped<br/>\n										1 tablespoon finely diced jalapeno pepper (de-seeded and ribs removed)<br/>\n										1 tablespoon freshly squeezed lime juice (half a juicy lime)<br/>\n										kosher salt<br/>\n										freshly ground black pepper<br/>\n								</p>		\n								<p>		\n										<h3>Potato Tartine:</h3><br/>\n							\n										~1 lb - 1.25 lbs russet potatoes (roughly 1 small russet potato per serving)<br/>\n										kosher salt<br/>\n										freshly ground pepper<br/>\n										neutral-flavored oil, for cooking (canola, safflower, or grapeseed)<br/>\n								</p>		\n								<p>		<h3>Toppings:</h3><br/>\n\n										2 - 4 whole large eggs (1-2 per serving, depending on preference)<br/>\n										1/2 ripe avocado, thinly sliced<br/>\n										2 ounces queso fresco cheese, crumbled<br/>\n										fresh cilantro leaves, for garnish<br/>\n								\n								</p>', '2', '0 Hour 30 Minutes', '0 Hour 30 minutes', '1 Hour 00 minutes', '<ol>\r\n										<li>Prepare Pico de Gallo: Combine the ingredients in a small bowl, stir, and allow to sit out at room temperature as you prepare the rest of the recipe.</li><br/>\r\n										<li>Prepare Potato Tartine: Preheat the oven to 300 degrees Fahrenheit. To reduce oxidizing, peel, grate, and cook one potato at a time. Using a large box grater, grate the potato lengthwise into a large bowl. Place the pile of grated potato into the center of a clean kitchen towel. Wrap up the grated potato and twist tightly into a ball. Squeeze the pile of grated potato over the sink to remove any excess moisture and starch--repeating several times as necessary. Place the grated potato into a clean, dry bowl and season lightly with salt and pepper.</li><br/>\r\n										<li>Heat a tablespoon of oil in a 8-inch non-stick skillet over medium-high heat. Once hot, add the grated potato and shape roughly, using a spatula, into a large circle. Press on the mixture with the back of a spatula to compact it, and cook gently for 8-10 minutes or until the bottom is golden brown and crisp.</li><br/>\r\n										<li>Flip the potato carefully and cook for another 8-10 minutes, adding additional oil as necessary, or until both sides are golden and crisp. Place on a cooling rack (set on top of a baking sheet) and keep warm in the oven as you prepare the remaining potato tartine and toppings.</li><br/>\r\n										<li>Prepare Toppings: Heat a small non-stick skillet over low heat, grease with a small amount of butter or oil, and crack the eggs (ensuring that the yolk does not break). Cook as desired, or until the eggs until the whites are firm and the yolks are still runny. Remove from heat immediately.</li><br/>\r\n										<li>Assemble: Remove the potato tartines from the oven, and serve. Top with 1 or 2 sunny-side eggs, a generous spoonful of pico de gallo, sliced avocado, crumbled queso fresco cheese, and garnish with fresh cilantro. Serve immediately.</li><br/>\r\n									\r\n									</ol>', 'Breakfast', 'images/mexican hash brown stack.jpg', 'images/mexican hash brown stack1.jpg', 'images/mexican hash brown stack2.jpg', 'images/mexican hash brown stack3.jpg', 0),
(6, 'Rhubarb Sorbet With Pistachio Brittle', '2014-04-12', 'British', 'Sweet yet tart rhubarb sorbet with salty, crunchy brittle â€“ flavours and textures that go mad in your mouth.', '800 g rhubarb<br/>\r\n										400 g caster sugar<br/>\r\n										1 lime<br/>\r\n										\r\n										<p><h3>PISTACHIO BRITTLE</h3><br/>\r\n										vegetable oil for greasing<br/>\r\n										Â½ teaspoon matcha powder (see tip)<br/>\r\n										100 g shelled pistachios\r\n										</p>\r\n										', '8', '0 Hour 40 Minutes', '0 Hour 20 minutes', '0 Hour 60 minutes', '<ol>\r\n										<li>Trim and chop the rhubarb, then place in a large pan with 175g of the caster sugar and 100ml of water, and cover with a lid.</li><br/>\r\n										<li>Bring to the boil, then remove the lid and simmer for 5 minutes, until the rhubarb is cooked. Set aside to cool.</li><br/>\r\n										<li>Spoon into a blender and blitz to a purÃ©e. Squeeze in the juice of half the lime. Taste and add more sugar and lime if needed (it should have a subtle, not overpowering, flavour).</li><br/>\r\n										<li>Churn in an ice cream maker for about 20 minutes, or until smooth and set. If you donâ€™t have an ice cream maker, \r\n										put the mixture in a tub and place in the freezer. Every hour give it a good stir. \r\n											Repeat until your sorbet is frozen to the right consistency. Transfer to a nice dish and store in the freezer.</li><br/>\r\n										<li>To make the brittle, use vegetable oil to lightly grease a tray lined with baking paper.</li><br/>\r\n										<li>Mix the matcha powder with a little hot water, then top it up to 75ml. Pour into a small pan with the remaining caster sugar, and place on a medium-high heat.</li><br/>\r\n										<li>Bring it to the boil, but donâ€™t stir â€“ just gently swirl it. Simmer gently for 4 to 5 minutes, or until it turns a deep brownish-green colour (or the temperature reaches \r\n											150ÂºC on a sugar thermometer, the â€™hard crackâ€™ stage), then pour into the greased baking tray.</li><br/>\r\n										<li>Roughly chop and scatter on the pistachios and 1 teaspoon of sea salt, then leave to cool. Once set, break into pieces.</li><br/>\r\n										<li>To serve, let the sorbet stand at room temperature for about 10 minutes, then scoop into bowls and sprinkle with shards of the brittle.</li><br/>\r\n									\r\n									</ol>', 'Desert', 'images/rhubarb sorbet with pistachio brittle.jpg', '', '', '', 0),
(4, 'Kung Pao Chicken', '2016-01-04', 'Chinese', 'This highly addictive stir-fried chicken continues to be one of the most popular Chinese dishes \r\n						in America as the succulent, \r\n						complex sauce of salty, sweet, sour, and spicy flavors is hard to pass up. \r\n						For years Americanized versions often left out the Sichuan peppercorns because of an import ban, \r\n						but now Sichuan peppercorns are once again easily found in Chinatown shops and even gourmet chains such as Whole Foods.', '<p>\r\n								1 tablespoon Szechuan peppercorns<br/>\r\n								2½ tablespoons cornflour<br/>\r\n								4 skinless higher-welfare chicken thighs , (350g)<br/>\r\n								groundnut oil , or vegetable oil<br/>\r\n								4 cloves of garlic<br/>\r\n								5 cm piece of ginger<br/>\r\n								2 spring onions<br/>\r\n								6 dried red chillies<br/>\r\n								2 tablespoons low-salt soy sauce<br/>\r\n								½ tablespoon rice wine vinegar<br/>\r\n								1 heaped tablespoon runny honey<br/>\r\n								50 g unsalted peanuts<br/>\r\n								1 punnet of salad cress<br/>\r\n								\r\n								\r\n								\r\n								</p>\r\n								\r\n									<h3>Ribbon Salad:</h3>\r\n								\r\n								<p>\r\n									½ a cucumber<br/>\r\n									1 large carrot<br/>\r\n									½ a bunch of fresh coriander<br/>\r\n									1 tablespoon low-salt soy sauce<br/>\r\n									1 tabelspoon rice wine vinegar<br/>\r\n								</p>', '2', '0 Hour 15 Minutes', '0 Hour 45 minutes', '1 Hour 00 Minutes', '<ol>\r\n									<li>Using a speed-peeler, peel the cucumber and carrot (including the skin), until you have a pile of long, thin ribbons and place in a bowl.</li><br/>\r\n									<li>Pick and roughly chop most of the coriander leaves, discarding the stalks. Place it all into the bowl with the soy and rice wine vinegar. Toss well and set aside.</li><br/>\r\n									<li>Toast the Szechuan peppercorns in a dry frying pan until lightly golden. Transfer to a pestle and mortar, grind to a fine powder, then sieve into a large bowl, discarding any large, tough bits.</li><br/>\r\n									<li>Add 2 tablespoons of cornflour and stir to combine. Chop the chicken into bite-sized chunks, then toss in the cornflour mixture to coat.</li><br/>\r\n									<li>Pour 2cm of oil into a large non-stick frying pan over a medium heat, add the chicken and fry for 7 to 8 minutes, or until golden and cooked through.</li><br/>\r\n									<li>Meanwhile, peel and finely slice the garlic and ginger, then trim and finely slice the spring onions.</li><br/>\r\n									<li>Using a slotted spoon, remove the chicken to a double layer of kitchen paper to drain. Carefully remove and discard most of the oil, leaving about 2 tablespoons in the pan, then return to a medium heat.</li><br/>\r\n									<li>Add the garlic and ginger and fry for 2 minutes, or until lightly golden, then stir in the spring onions and whole chillies and fry for 1 further minute.</li><br/>\r\n									<li>Meanwhile, combine ½ tablespoon of cornflour and 2 tablespoons of water. Mix in the soy, vinegar and honey, then pour the mixture into the pan. Bring to the boil and simmer for a few minutes, or until slightly thickened.</li><br/>\r\n									<li>Lightly bash and add the peanuts, stir in the chicken, then toss well until warmed through. Snip the cress over the ribbon salad, scatter the reserved coriander leaves over the chicken, then serve.</li><br/>\r\n								</ol>', 'Main Course', 'images/Kung Pao chicken.jpg', '', '', '', 0),
(5, 'Vegan Garam Masala Carrot Soup', '2014-08-11', 'Indian', 'This vegan garam masala carrot soup is my only little twist. The addition of full-fat coconut milk (*the soup is dairy-free!) makes this carrot soup insanely creamy and smooth. This soup unintentionally checks all of the boxes: gluten-free, vegan (and thus, vegetarian), paleo, dairy-free. The works. It is the little carrot soup that could.\n								The absolute best part? Today''s carrot soup recipe can be made with just a sheet pan and blender, so clean up is a breeze! Let me explain…\n\n\n							<p>Vegan Garam Masala Carrot Soup. This easy, creamy soup comes together in less than 45 minutes, using just a sheet pan and blender.\n							You might be wondering exactly how this is possible.</p>\n\n							<p>Since the soup itself contains very few ingredients (many of which you might have on hand already, making this soup ideal for last-minute dinners), the star ingredients, carrots and yellow onions, are roasted in the oven until tender, caramelized, and concentrated in flavor. The vegetables are tossed with garam masala, a pinch of cayenne pepper, coconut oil, and salt.\n								It is perfect for those nights when you crave homemade soup, but simply don''t want feel like standing over the stove. The oven does all the work for you.</p>\n\n							<p>OH! And it gets even better. You simply place the coconut milk in your blender, add boiling water (I use my electric kettle, but you could easily just heat water in your microwave for a few minutes), a squeeze of fresh lime juice, and add all of those delicious, shrunken roasted vegetables.</p>\n\n							<p>Puree until smooth. Serve hot straight from the blender. It''s that simple, really. As someone who loves to make soup on a fairly regular basis, it is one of my favorites.</p>\n\n							<p>Vegan Garam Masala Carrot Soup. This easy, creamy soup comes together in less than 45 minutes, using just a sheet pan and blender.Vegan Garam Masala Carrot Soup. This easy, creamy soup comes together in less than 45 minutes, using just a sheet pan and blender.Vegan Garam Masala Carrot Soup. This easy, creamy soup comes together in less than 45 minutes, using just a sheet pan and blender.Vegan Garam Masala Carrot Soup. This easy, creamy soup comes together in less than 45 minutes, using just a sheet pan and blender.\n							If you''re not familiar with garam masala, it is an Indian spice blend that usually contains peppercorns, cinnamon, nutmeg, mace, cloves, bay leaf, and cumin.</p>\n\n							<p>It is one of my favorite ground spices, because it is warm, spiced, yet delicate. It doesn''t overpower ingredients very easily and pairs extremely well with so many vegetables. This acorn squash and sweet potato soup soup also uses garam masala, and is great for fall or winter.</p>\n\n							<p>I highly recommend investing in a little bottle of garam masala, because you''ll end up turning to it time and time again in the kitchen – but you can make your own from scratch!</p>\n\n							<p>Every brand you buy will vary a bit in ratios of spices, but this basic recipe is a great starting point. Whatever is easier for you and works with what you have on hand!</p>\n\n							<p>Vegan Garam Masala Carrot Soup. This easy, creamy soup comes together in less than 45 minutes, using just a sheet pan and blender.Vegan Garam Masala Carrot Soup. This easy, creamy soup comes together in less than 45 minutes, using just a sheet pan and blender.\n							*If you do not have garam masala and want to make this soup in a pinch, you can substitute with a medium spiced curry powder (again, curry powders vary a lot in spice and heat level, so I would reduce the quantity by a half teaspoon and add more later, if you feel it does not have enough depth of flavor!).</p>\n\n							<p>Lastly, if you''re wondering if you can substitute light coconut milk for this recipe – the answer is yes! I''ve made it with both full-fat and light coconut milk, and enjoy both versions. But I absolutely prefer the full-fat version. It makes just a small bowlful much more substantial and filling.</p>', '<p>\n									1 and 1/2 lbs medium carrots, trimmed, peeled, sliced lengthwise, and cut into 1-inch pieces<br/>\n									2 medium yellow onions, chopped into 1-inch pieces<br/>\n									2 tablespoons (liquid state) coconut oil or extra virgin olive oil<br/>\n									2 teaspoons ground garam masala (*see note)<br/>\n									small pinch of ground cayenne pepper<br/>\n									3/4 teaspoon kosher salt<br/>\n									1 can (13 or 14 ounces) full-fat coconut milk (or light coconut milk)<br/>\n									juice of half a lime<br/>\n									freshly ground black pepper<br/>\n									microgreens, for garnishing (optional)<br/>\n								</p>', '3-4', '0 Hour 15 Minutes', '0 Hour 30 minutes', '0 Hour 45 minutes', '<ol>\r\n										<li>Preheat the oven to 425 degrees F (220 C) with a rack in the center position. Line a sheet pan with aluminum foil. Place the carrots and onions on the sheet pan, drizzle with coconut oil (or extra virgin olive oil, if using), ground garam masala, cayenne pepper, and salt. Toss the vegetables with your hands to evenly coat the vegetables. Spread into an even, thin layer.</li><br/>\r\n										<li>Roast the carrots and onions until lightly caramelized and very fork tender, tossing them halfway through, about 25 to 35 minutes.</li><br/>\r\n										<li>Place the coconut milk (if desired, reserve about 1 - 2 tablespoons for drizzling and garnishing the soup) and 1 and 1/4 cups boiling hot water in a high capacity blender. If using a smaller blender, you may need to do this step in batches. Using the foil, transfer the roasted carrots and onions to the blender. Add the lime juice. Puree until very smooth and creamy. If the soup is too thick, add a few tablespoons of hot water at a time until desired consistency is reached. Season the soup to taste with salt, pepper, and additional lime juice (if desired).</li><br/>\r\n										<li>Serve the soup hot from the blender, garnishing with a drizzle of coconut milk, olive oil, and fresh micrograms as desired.</li><br/>\r\n										\r\n									</ol>', 'Vegetarian', 'images/vegan garam masala carrot soup.jpg', '', '', '', 0),
(7, 'Vegan Chinese Noodles', '2013-04-24', 'Chinese', 'You donâ€™t have to be vegan or vegetarian to appreciate these simple, quick and super-moreish noodles â€\n', '<p>\r\n										\r\n										200 g thin rice noodles<br/>\r\n										300 g mixed oriental mushrooms , such as oyster, shitake and enoki, cleaned<br/>\r\n										2 cloves of garlic<br/>\r\n										1 fresh red chilli<br/>\r\n										1 thumb-sized piece of ginger<br/>\r\n										200 g courgettes<br/>\r\n										Â½ bunch of fresh coriander<br/>\r\n										6 spring onions<br/>\r\n										groundnut oil , or vegetable oil<br/>\r\n										1 teaspoon cornflour<br/>\r\n										2 tablespoons low-salt soy sauce<br/>\r\n										1 tablespoon agave syrup<br/>\r\n										1 teaspoon seasame oil<br/>\r\n										Â½ tablespoon rice wine , or dry sherry<br/>\r\n										100 g baby spinach<br/>\r\n										2 limes , to serve<br/>\r\n										sambal , or hot chilli sauce, to serve</p>', '4', '0 Hour 5 Minutes', '0 Hour 25 minutes', '0 Hour 30 minutes', '<ol>\r\n										<li>Cook the noodles according to packet instructions, drain well, rinse under cold running water, \r\n										then set aside. Finely slice or tear the mushrooms, leaving any smaller ones whole. \r\n										Peel the garlic and deseed the chilli, then finely slice. Peel the ginger and trim the courgettes, then slice both into matchsticks. \r\n										Pick the coriander leaves and set aside, then finely slice the stalks. \r\n										Trim and finely slice the spring onions, reserving the green part for later.</li><br/>\r\n										<li>Heat a good lug of oil in a large wok over a high heat, \r\n										then add the mushrooms and fry for 3 to 4 minutes, or until slightly softened. Add the chopped garlic, chilli, ginger,\r\n										courgette, coriander stalks and the white part of the spring onions. Fry for a further 3 minutes, or until softened and lightly golden.</li><br/>\r\n										<li>Meanwhile, combine the cornflour and 2 tablespoons of water, then mix in the soy, agave syrup, sesame oil and rice wine or sherry. Stir the mixture into the pan and cook for a further 3 minutes, or until thickened.</li><br/>\r\n										<li>Roughly chop and add the spinach along with the noodles. Toss well to warm through, then tear in most of the coriander leaves. Serve with lime wedges, sambal or chilli sauce and the reserved coriander and spring onions scattered on top.</li><br/>\r\n									\r\n									</ol>', 'Vegetarian', 'images/vegan chinese noodles.jpg', '', '', '', 0),
(8, 'Brown Sugar and Chili-Rubbed Salmon With Avocado Crema', '0000-00-00', 'American', 'Healthy, wholesome eating with a sprinkling of indulgence here and there. It is about celebrating life, cooking with wholesome, flavor-packed ingredients, and at the same time â€“ forgiving and allowing ourselves to enjoy that extra slice of chocolate cake or handful of fries.\n\n<p>It is elegant, yet simple. It is a little bit smoky and spicy (if you want to increase the spiciness, up the cayenne pepper!). It involves avocados. It takes less than 30 minutes to prepare start to finish.</p>\n<p>And lastly, it is topped with caramelized lime slices. I mean, how cool is that? As Andie says in the headnotes, Ina Garten would be proud. It is one of those perfect dishes that can serve double-duty as an easy weeknight dinner or as an elegant main course at a dinner party.</p>', 'Avocado Crema:\r\n\r\n1/2 ripe avocado, peeled and pitted<br/>\r\n2 tablespoons sour cream<br/>\r\n2 tablespoons fresh lime juice<br/>\r\n1 garlic clove<br/>\r\n1/4 cup packed fresh flat-leaf parsley (*I used cilantro - fresh basil would also be great!)<br/>\r\npinch of kosher salt<br/><br/>\r\nSalmon:<br/><br/>\r\n\r\n1 tablespoon packed light (or dark) brown sugar<br/>\r\n1 tablespoon chili powder<br/>\r\n1/2 teaspoon kosher salt<br/>\r\npinch of cayenne pepper<br/>\r\n4 (5-ounce) salmon filets, preferably wild<br/>\r\n4 teaspoons extra virgin olive oil<br/>\r\n1 lime, thinly sliced into rounds<br/>', '4', '0 Hour 10 Minutes', '0 Hour 20 Minutes', '0 Hour 30 Minutes', '<li><strong>Make the avocado crema: </strong>For the cream, in a blender or small food processor, combine the avocado, sour cream, lime juice, garlic, parsley (or cilantro or basil, if using), and salt, and pulse until smooth. The consistency should be similar to sour cream - thick yet spreadable. To think it, add a tablespoon or two of water and pulse to incorporate. Cover and set aside until ready to serve. The crema will keep in an airtight container in the refrigerator for 1 day.</li>\r\n	<li><strong>Prepare the salmon: </strong>In a small bowl, combine the sugar, chili powder, salt, and cayenne pepper. Lay the salmon filets on a clean work surface and sprinkle the brown sugar mixture evenly over each filet, rubbing it into the flesh on all sides.</li>\r\n	<li>In a 12-inch non-stick skillet set over medium-high heat, heat 2 teaspoons of the oil. Add 2 of the salmon filets, skin side up, if they have skin on) and cook, undisturbed, until their undersides are crisp and just beginning to blacken, about 4 minutes. Flip the filets and cook until the fish feels firm to the touch, 4 minutes more. Transfer to a warm plate. Add the remaining 2 teaspoons of oil to the pan and swirl to coat. Repeat the cooking process with the remaining 2 filets of salmon. Set the salmon aside.</li>\r\n	<li>Add the lime juices to the skillet and cook just until they begin to caramelize, about 30 seconds. Flip and cook for an additional 30 seconds.</li>\r\n	<li>To serve, divide the salmon filets among 4 plates and spoon 2 tablespoons of cream over each. Press a caramelized lime slice into the crema to garnish and serve.</li>\r\n</ol></span></div>\r\n', 'Dinner', 'images/Brown Sugar and Chili-Rubbed Salmon With Avocado Crema.jpg', '', '', '', 0),
(9, 'Apple Feta and Candied Pecan Salad with Homemade Sourdough Croutons', '0000-00-00', 'Belgian', 'This salad is loaded with crisp slices of tart Granny Smith apple, candied pecans (or if you prefer, toasted pecans would be just as good!), briny and salty crumbled feta cheese, and homemade sourdough croutons for a bit of crunch.\n\n<p>This salad is loaded with crisp slices of tart Granny Smith apple, candied pecans (or if you prefer, toasted pecans would be just as good!), briny and salty crumbled feta cheese, and homemade sourdough croutons for a bit of crunch.</p>', 'SOURDOUGH CROUTONS:<br/><br/>\r\n\r\n1 overflowing cup of good-quality sourdough bread, cut into 3/4-inch cubes (roughly 3 - 4 slices)<br/>\r\n2 tablespoons extra virgin olive oil<br/>\r\nkosher sea salt<br/>\r\nfreshly ground black pepper<br/><br/><br/>\r\nFOR THE DRESSING:<br/><br/><br/>\r\n\r\n1 teaspoon Dijon mustard<br/>\r\njuice of 1 small orange<br/>\r\n1 tablespoons white wine vinegar<br/>\r\n3 tablespoons extra virgin olive oil<br/>\r\nkosher sea salt<br/>\r\nfreshly ground black pepper<br/><br/><br/>\r\n<h3>Apple, Feta, Pecan Salad:</h3><br/>\r\n\r\n3-4 heads of baby gem lettuce or 2 heads of romaine lettuce (see instructions)<br/>\r\n3.5 ounces baby mixed greens<br/>\r\n1/2 large Granny Smith apple, cored and thinly sliced<br/>\r\n1/4 cup candied or toasted pecans, chopped<br/>\r\n2.5 ounces crumbled feta cheese<br/>', '3 - 4', '0 Hour 20 Minutes', '0 Hour 15 Minutes', '0 Hour 35 Minutes', '<li><strong>Prepare Croutons: </strong>Heat the olive olive in a large skillet over medium heat until shimmering. Add the cubed sourdough bread and spread into a single layer. Season with salt and pepper, and continue to toast over medium heat (adjusting the heat as necessary), tossing every few minutes, until the croutons are golden brown on all sides, but still slightly soft in the center. Set aside to cool.</li>\r\n	<li><strong>Prepare Dressing: </strong>In a medium bowl, whisk together the Dijon mustard, orange juice, and white wine vinegar. Slowly pour in the olive oil, whisking continuously with your other hand, until the ingredients come together. Season to taste with salt and pepper.</li>\r\n	<li><strong>Prepare Salad: </strong>Trim the ends of the baby gem lettuce heads, separate the leaves, and place in a large serving bowl. If you are using hearts of romaine (as I did), you can mimic the look of baby gem lettuce by discarding any bruised outer leaves and using just the top 3 to 4 inches of the romaine hearts (look for hearts of romaine that are tight and very fresh) - you can store the remaining lettuce for other salads. Add the sliced apple, pecans, and feta and croutons and toss the salad lightly with dressing. Serve.</li>\r\n</ol>', 'Salad', 'images/Apple Feta and Candied Pecan Salad with Homemade Sourdough Croutons1.jpg', 'images/Apple Feta and Candied Pecan Salad with Homemade Sourdough Croutons2.jpg', 'images/Apple Feta and Candied Pecan Salad with Homemade Sourdough Croutons3.jpg', 'images/Apple Feta and Candied Pecan Salad with Homemade Sourdough Croutons4.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `reg_email` varchar(30) NOT NULL,
  `reg_fname` varchar(20) NOT NULL,
  `reg_lname` varchar(20) NOT NULL,
  `reg_dob` date NOT NULL,
  `reg_hashpassword` varchar(255) NOT NULL,
  PRIMARY KEY (`reg_email`),
  KEY `reg_email` (`reg_email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`reg_email`, `reg_fname`, `reg_lname`, `reg_dob`, `reg_hashpassword`) VALUES
('johnsmith@test.com', 'John', 'Smith', '1987-08-25', '81dc9bdb52d04dc20036dbd8313ed055'),
('tjones@gmail.com', 'Tom', 'Jones', '1988-05-26', '81dc9bdb52d04dc20036dbd8313ed055'),
('dextmorg@live.com', 'Dexter', 'Morgan', '1978-03-19', '81dc9bdb52d04dc20036dbd8313ed055');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
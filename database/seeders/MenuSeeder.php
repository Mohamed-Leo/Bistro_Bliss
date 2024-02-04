<?php

namespace Database\Seeders;

use App\Models\menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        menu::create([
            'menu_type' => 'breakfast',
            "price" => "$ 9.99",
            "title" => "Fried Eggs",
            "description" => "Made with eggs, lettuce, salt, oil and other ingredients.",
            'img_file'=> 'eggs.png'
        ]);

        menu::create([
            'menu_type' => 'dishes',
            "price" => "$ 15.99",
            "title" => "Hawaiian Pizza",
            "description" => "Made with eggs, lettuce, salt, oil and other ingredients.",
            'img_file'=> 'pizzac.png'
        ]);

        menu::create([
            'menu_type' => 'drinks',
            "price" => "$ 7.25",
            "title" => "Martinez Cocktail",
            "description" => "Made with eggs, lettuce, salt, oil and other ingredients.",
            'img_file'=> 'cocktail.png'
        ]);

        menu::create([
            'menu_type' => 'dessert',
            "price" => "$ 20.99",
            "title" => "Butterscotch Cake",
            "description" => "Made with eggs, lettuce, salt, oil and other ingredients.",
            'img_file'=> 'bcake.png'
        ]);

        menu::create([
            'menu_type' => 'drinks',
            "price" => "$ 5.89",
            "title" => "Mint Lemonade",
            "description" => "Made with eggs, lettuce, salt, oil and other ingredients.",
            'img_file'=> 'lemonade.png'
        ]);

        menu::create([
            'menu_type' => 'dessert',
            "price" => "$ 18.05",
            "title" => "Chocolate Icecream",
            "description" => "Made with eggs, lettuce, salt, oil and other ingredients.",
            'img_file'=> 'icecream.png'
        ]);

        menu::create([
            'menu_type' => 'dishes',
            "price" => "$ 12.55",
            "title" => "Cheese Burger",
            "description" => "Made with eggs, lettuce, salt, oil and other ingredients.",
            'img_file'=> 'burgersand.png'
        ]);

        menu::create([
            'menu_type' => 'dessert',
            "price" => "$ 12.99",
            "title" => "Classic Waffles",
            "description" => "Made with eggs, lettuce, salt, oil and other ingredients.",
            'img_file'=> 'waffels.png'
        ]);

        menu::create([
            'menu_type' => 'breakfast',
            "img_link" => "https://media.istockphoto.com/id/617874228/photo/big-breakfast-on-the-white-rustic-table.jpg?s=1024x1024&w=is&k=20&c=X6iHgDY4JqQ0brqhN97KKu2G-GOTArlqgLdnxrUQMm8=",
            "price" => "$ 10",
            "title" => "Big Bite Breakfast",
            "description" => "Made with Two eggs, choice of bacon, sausage or ham, choice of side & toast.."
        ]);

        menu::create([
            'menu_type' => 'breakfast',
            "img_link" => "https://img.freepik.com/free-photo/omlette-with-pepperoni-green-salad_114579-3686.jpg?w=740&t=st=1699802703~exp=1699803303~hmac=142138068276d96553ee0156a9c7a6983c50b4ee905af0cd27d9f85db246e7c9",
            "price" => "$ 5",
            "title" => "Denver",
            "description" => "Made with am, onions, green peppers, mushrooms & monterey jack cheese."
        ]);

        menu::create([
            'menu_type' => 'breakfast',
            "img_link" => "https://img.freepik.com/free-photo/turkish-cheese-pide-flatbread-with-cheese_140725-4019.jpg?w=740&t=st=1699802908~exp=1699803508~hmac=706db915c2e165ef16ba924719521b8c1a0b4947607952e1403490de557ae987",
            "price" => "$ 7.25",
            "title" => "Big Sandwich",
            "description" => "Made with Two over-hard eggs, bacon, cheddar and chipotle mayo on a toasted brioche roll, choice of side."
        ]);

        menu::create([
            'menu_type' => 'drinks',
            "img_link" => "https://img.freepik.com/free-photo/chocolate-smoothie-with-choco-syrup-branch-bananas_114579-33845.jpg?w=740&t=st=1699803075~exp=1699803675~hmac=39f184b0b1bdad873cb818ff1cac3674ca5cc463429e2eed102ea3d20d0571cc",
            "price" => "$ 11.5",
            "title" => "banana smoothie",
            "description" => "Made with dairy-free milk, frozen bananas, almond butter."
        ]);

        menu::create([
            'menu_type' => 'breakfast',
            "img_link" => "https://img.freepik.com/premium-photo/traditional-delicious-turkish-breakfast-food-concept-photo_693630-4671.jpg?w=740",
            "price" => "$ 10.89",
            "title" => "Power Breakfast",
            "description" => "Made with Scrambled egg whites, chicken sausage, fresh fruit & toast."
        ]);

        menu::create([
            'menu_type' => 'breakfast',
            "img_link" => "https://img.freepik.com/free-photo/close-up-breakfast-with-cereals_23-2148604116.jpg?w=826&t=st=1699803615~exp=1699804215~hmac=f7489e0f93ea522ab30337dbe478ff433c106af58994e5c7f250b65ef89b6a98",
            "price" => "$ 10.05",
            "title" => "Blende oat",
            "description" => "Made with blender, sweetener, maple syrup, spices."
        ]);

        menu::create([
            'menu_type' => 'breakfast',
            "img_link" => "https://img.freepik.com/free-photo/tasty-breakfast-with-yogurt-fruits_23-2148529420.jpg?w=740&t=st=1699803759~exp=1699804359~hmac=89c993c4474a66dbb06c9129fffce51cf998012e11d8e1ebf5edd2789cd42edf",
            "price" => "$ 4.55",
            "title" => "Yogurt",
            "description" => "Made with Vanilla yogurt, sliced fruit, granola & a swirl of our homemade berry jam, served with a homemade muffin."
        ]);

        menu::create([
            'menu_type' => 'breakfast',
            "img_link" => "https://img.freepik.com/free-photo/top-view-crackers-with-paper-bag_23-2148562760.jpg?w=740&t=st=1699804070~exp=1699804670~hmac=800db8d1ba8319a865bc594e06b4739c7987160732a23058631b22157c3aa6ff",
            "price" => "$ 6.99",
            "title" => "Toast Crunch",
            "description" => "Made with Sweet granola-crunch coating, strawberries, bananas & whip."
        ]);

        menu::create([
            'menu_type' => 'dishes',
            "img_link" => "https://img.freepik.com/free-photo/cheeseburger-with-french-fries_140725-6072.jpg?w=360&t=st=1699804677~exp=1699805277~hmac=12e41077e982f1c04eedf9f77c51db2422ab69c5f10cf0b3b0f936146c33df7b",
            "price" => "$ 18",
            "title" => "Bistro Burger",
            "description" => "Made with Two Grilled black angus burger*, cheddar, lettuce, tomato & herb mayo on a brioche bun Add bacon or a fried egg for an additional charge."
        ]);

        menu::create([
            'menu_type' => 'dishes',
            "img_link" => "https://img.freepik.com/free-photo/tendir-doner-with-chicken-table_140725-2443.jpg?w=360&t=st=1699804741~exp=1699805341~hmac=8283db60b63386c95ba9660564a04551357f5579549d986ac1e9ea139dfc83c5",
            "price" => "$ 15.6",
            "title" => "Chicken Sandwich",
            "description" => "Made with Buttermilk brined & fried chicken breast, house hot sauce, lettuce, tomato & chipotle mayo on a toasted brioche bun."
        ]);

        menu::create([
            'menu_type' => 'dishes',
            "img_link" => "https://img.freepik.com/free-photo/vertical-shot-delicious-roasted-chicken-garnished-with-vegetables-honey-table_181624-28578.jpg?w=360&t=st=1699804882~exp=1699805482~hmac=fc2dfb20f2ddc1ec96e005e7ddec4a5fd2efead23ba9da8c4abf52a7ada192e9",
            "price" => "$ 40.25",
            "title" => "Herb Turkey",
            "description" => "Made with Sliced turkey, smashed avocado, lettuce, tomato and herb mayo."
        ]);

        menu::create([
            'menu_type' => 'dishes',
            "img_link" => "https://img.freepik.com/free-photo/sandwich-with-vegetables-table_140725-5447.jpg?w=740&t=st=1699804988~exp=1699805588~hmac=9b74d6ac447e07a7369aebfaa45ec91d442888ff7995ed277502d00c32934f8b",
            "price" => "$ 13.5",
            "title" => "Grilled Cheese",
            "description" => "Made with heddar, monterey jack, sweet and spicy bacon and sliced tomato on grilled sourdough."
        ]);

        menu::create([
            'menu_type' => 'dishes',
            "img_link" => "https://img.freepik.com/free-photo/grilled-sandwich-with-beef-pork-vegetable-generated-by-ai_188544-20918.jpg?w=826&t=st=1699805088~exp=1699805688~hmac=6f5b47aec49a2a87a7598b18ce7734f87b1891b8e21321d8d42729cb9f1de7d6",
            "price" => "$ 20.89",
            "title" => "Cali BLT",
            "description" => "Made with  Crisp bacon, avocado, lettuce, tomato & chipotle mayo on thick sliced whole grain wheat."
        ]);

        menu::create([
            'menu_type' => 'dishes',
            "img_link" => "https://assets.epicurious.com/photos/5b770caff1ff6a661bb16346/1:1/w_1600,c_limit/Should-I-Be-Using-Grilling-Planks-2-16082018.jpg",
            "price" => "$ 26.05",
            "title" => "Cedar-Plank Salmon",
            "description" => "Made with tablespoons grainy mustard , tablespoons mild honey or pure maple syrup, ."
        ]);

        menu::create([
            'menu_type' => 'dishes',
            "img_link" => "https://assets.epicurious.com/photos/5f737a125a7e264184aab1b4/1:1/w_1600,c_limit/ChickenGrapesFennel_HEROv2_12175.jpg",
            "price" => "$ 35.55",
            "title" => "Braised Chicken",
            "description" => "Made with chicken quarters, Salt and pepper, Garlic powder, 2 yellow onions."
        ]);

        menu::create([
            'menu_type' => 'dishes',
            "img_link" => "https://www.inspiredtaste.net/wp-content/uploads/2018/08/Pan-Seared-Scallops-Recipe-1-1200.jpg",
            "price" => "$ 32.99",
            "title" => "Seared Scallops",
            "description" => "Made with 1 lb sea scallop(455 g), side muscles removed, fine sea salt, black pepper, freshly ground1 tablespoon extra virgin olive oil."
        ]);

        menu::create([
            'menu_type' => 'drinks',
            "img_link" => "https://c4.wallpaperflare.com/wallpaper/528/736/10/ice-glasses-cocktail-drink-wallpaper-preview.jpg",
            "price" => "$ 7.25",
            "title" => "Martinez Cocktail",
            "description" => "Made with eggs, lettuce, salt, oil and other ingredients."
        ]);

        menu::create([
            'menu_type' => 'drinks',
            "img_link" => "https://c4.wallpaperflare.com/wallpaper/305/98/562/carafe-table-napkin-glasses-tea-wallpaper-preview.jpg",
            "price" => "$ 5.89",
            "title" => "Mint Lemonade",
            "description" => "Made with eggs, lettuce, salt, oil and other ingredients."
        ]);

        menu::create([
            'menu_type' => 'drinks',
            "img_link" => "https://img.freepik.com/free-photo/chocolate-smoothie-with-choco-syrup-branch-bananas_114579-33845.jpg?w=740&t=st=1699803075~exp=1699803675~hmac=39f184b0b1bdad873cb818ff1cac3674ca5cc463429e2eed102ea3d20d0571cc",
            "price" => "$ 11.5",
            "title" => "banana smoothie",
            "description" => "Made with dairy-free milk, frozen bananas, almond butter."
        ]);

        menu::create([
            'menu_type' => 'drinks',
            "img_link" => "https://www.socialandcocktail.co.uk/wp-content/uploads/2012/10/Espresso-Martini.jpg",
            "price" => "$ 10.5",
            "title" => "ESPRESSO MARTINI",
            "description" => "Made with 37 1/2 ml Vanilla Vodka, 12 1/2 ml Kahlúa, Double Espresso, 12 1/2 ml Sugar Syrup, 3 Coffee Beans"
        ]);

        menu::create([
            'menu_type' => 'drinks',
            "img_link" => "https://www.socialandcocktail.co.uk/wp-content/uploads/2011/12/Brandy-Collins.jpg",
            "price" => "$ 11.89",
            "title" => "BRANDY COLLINS",
            "description" => "Made with  50 ml Brandy, 25 ml Squeezed Lemon Juice, 15 ml Sugar Syrup, 15 ml Soda Water, Maraschino Cherry, Lemon Slice."
        ]);

        menu::create([
            'menu_type' => 'drinks',
            "img_link" => "https://c0.wallpaperflare.com/preview/797/39/616/beverage-citrus-close-up-cocktail.jpg",
            "price" => "$ 9.05",
            "title" => "lime Beverages",
            "description" => "Made with Cut and juice the lemons , Add in sliced limes."
        ]);

        menu::create([
            'menu_type' => 'drinks',
            "img_link" => "https://c4.wallpaperflare.com/wallpaper/259/348/861/food-juice-drink-fruit-wallpaper-preview.jpg",
            "price" => "$ 17.55",
            "title" => "Cocktail",
            "description" => "Made with 6 cups frozen strawberries, 1 1/2 cups pomegranate juice, 1/2 cup orange juice."
        ]);

        menu::create([
            'menu_type' => 'drinks',
            "img_link" => "https://c4.wallpaperflare.com/wallpaper/189/167/777/oranges-orange-fruit-and-juice-wallpaper-preview.jpg",
            "price" => "$ 12.99",
            "title" => "orange fruit and juice",
            "description" => "First, peel the oranges. Do remove the pith and the white layers from the orange segments, Add 1 tablespoon of lemon juice."
        ]);

        menu::create([
            'menu_type' => 'dessert',
            "img_link" => "https://img.freepik.com/free-photo/portioned-honey-cake-served-with-tea_140725-5053.jpg?w=360&t=st=1699765309~exp=1699765909~hmac=c4a9c5b7d4a0cec9ca34da19eb5df8b8c16ee724fc65c39f7c849496d54deffe",
            "price" => "$ 20.99",
            "title" => "Butterscotch Cake",
            "description" => "Made with eggs, lettuce, salt, oil and other ingredients."
        ]);

        menu::create([
            'menu_type' => 'dessert',
            "img_link" => "https://c0.wallpaperflare.com/preview/809/643/744/icecream-spoon-cone-treat.jpg",
            "price" => "$ 18.05",
            "title" => "Chocolate Icecream",
            "description" => "Made with eggs, lettuce, salt, oil and other ingredients."
        ]);

        menu::create([
            'menu_type' => 'dessert',
            "img_link" => "https://food.fnr.sndimg.com/content/dam/images/food/fullset/2020/02/27/0/FNK_Cake-Pops_H1.jpg.rend.hgtvcom.966.644.suffix/1582853049838.jpeg",
            "price" => "$ 8.5",
            "title" => "Cake Pops",
            "description" => "One 15.25-ounce box yellow cake mix, plus required ingredients, 1 cup vanilla frosting, plus more as needed ."
        ]);

        menu::create([
            'menu_type' => 'dessert',
            "img_link" => "https://food.fnr.sndimg.com/content/dam/images/food/fullset/2012/2/24/2/VM0309_coconut-flan_s4x3.jpg.rend.hgtvcom.966.725.suffix/1655399609494.jpeg",
            "price" => "$ 10.5",
            "title" => "Coconut Flan",
            "description" => "Vegetable oil cooking spray, 1 cup cajeta* or caramel sauce, at room temperature, 3 (14-ounce) cans sweetened condensed milk"
        ]);

        menu::create([
            'menu_type' => 'dessert',
            "img_link" => "https://food.fnr.sndimg.com/content/dam/images/food/fullset/30/0/QK604_kardea-brown-delicious-dunkers_s4x3.jpg.rend.hgtvcom.966.725.suffix/1640883350369.jpeg",
            "price" => "$ 17.89",
            "title" => "Delicious Dunkers",
            "description" => "1 stick (8 tablespoons) unsalted butter, at room temperature, 1/3 cup granulated sugar, 1 large egg yolk "
        ]);

        menu::create([
            'menu_type' => 'dessert',
            "img_link" => "https://food.fnr.sndimg.com/content/dam/images/food/fullset/2016/3/28/0/FNK_Flourless-Chocolate-Cake_s4x3.jpg.rend.hgtvcom.966.725.suffix/1459253913073.jpeg",
            "price" => "$ 19.05",
            "title" => "Flourless Chocolate Cake",
            "description" => "8 tablespoons (1 stick) unsalted butter, plus more for buttering the pan, 8 ounces bittersweet chocolate (not chips), chopped"
        ]);

        menu::create([
            'menu_type' => 'dessert',
            "img_link" => "https://food.fnr.sndimg.com/content/dam/images/food/fullset/2021/06/14/0/FNK_Turon_H1_s4x3.jpg.rend.hgtvcom.966.725.suffix/1623679705065.jpeg",
            "price" => "$ 13.55",
            "title" => "Turon",
            "description" => "24 8-by-8-inch square frozen lumpia wrappers or spring roll shells, 4 very ripe plantains One 12-ounce jar jackfruit in syrup "
        ]);

        menu::create([
            'menu_type' => 'dessert',
            "img_link" => "https://food.fnr.sndimg.com/content/dam/images/food/fullset/2020/05/14/0/FNK_WHITE-CLAW-BLACK-CHERRY-CUPCAKES-H_s4x3.jpg.rend.hgtvcom.966.725.suffix/1589468143110.jpeg",
            "price" => "$ 15.99",
            "title" => "White Claw Black Cherry Cupcakes",
            "description" => "Nonstick cooking spray, One 15.25-ounce box red velvet cake mix, 3 large eggs"
        ]);
    }
}

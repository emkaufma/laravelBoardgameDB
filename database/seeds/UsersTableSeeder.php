<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql = '
        INSERT INTO users (id,name,email,password) VALUES ("1","Eric Kaufman","emkaufma@asu.edu","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("2","Todd McDaniel","ToddMMcDaniel@cuvox.de","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("3","Manuel Mayer","ManuelHMayer@einrot.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("4","Michael Flores","MichaelFFlores@fleckens.hu","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("5","Lindsey Gardner","LindseyJGardner@superrito.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("6","Barbara Lowe","BarbaraHLowe@teleworm.us","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("7","Jose Davis","JoseMDavis@cuvox.de","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("8","Karen Garza","KarenBGarza@jourrapide.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("9","Lemuel Reed","LemuelJReed@superrito.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("10","Alicia Sanchez","AliciaNSanchez@fleckens.hu","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("11","Eric Moreno","EricSMoreno@teleworm.us","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("12","Martin Colby","MartinJColby@rhyta.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("13","Randall Bass","RandallVBass@cuvox.de","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("14","Mark Nicholson","MarkGNicholson@gustr.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("15","William Wash","WilliamLWash@rhyta.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("16","Aaron Seabolt","AaronSSeabolt@einrot.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("17","Dawn Mendoza","DawnDMendoza@fleckens.hu","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("18","Jesse Latimore","JesseRLatimore@rhyta.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("19","Doris Jones","DorisFJones@jourrapide.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("20","Willard Danner","WillardPDanner@cuvox.de","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("21","Donna Taber","DonnaTTaber@gustr.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("22","Christopher Blauser","ChristopherKBlauser@gustr.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("23","Brenda Jones","BrendaCJones@einrot.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("24","Brandon Schneider","BrandonBSchneider@rhyta.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"),
        ("25","Jessica Giles","JessicaWGiles@teleworm.us","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"),
        ("26","Gary Bishop","GaryMBishop@fleckens.hu","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("27","Daniel Sanders","DanielESanders@rhyta.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("28","Andrew Maske","AndrewPMaske@fleckens.hu","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("29","James Cauthen","JamesMCauthen@rhyta.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("30","Rogelio Pettway","RogelioDPettway@superrito.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("31","Michell Edmonds","MichelleJEdmonds@rhyta.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("32","Grace Lamar","GraceLLamar@jourrapide.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("33","Leon Henline","LeonEHenline@armyspy.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("34","Jesse Torres","JesseETorres@jourrapide.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("35","Sarah Geller","SarahCGeller@armyspy.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("36","Elvie Bentley","ElvieWBentley@fleckens.hu","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("37","Anna Soto","AnnaMSoto@dayrep.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("38","Marlene Bryant","MarleneCBryant@gustr.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("39","Mary East","MaryJEast@rhyta.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("40","Terrence Elamin","TerrenceCElamin@teleworm.us","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("41","Enrique Stein","EnriqueLStein@rhyta.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("42","Evelyn Campbell","EvelynRCampbell@teleworm.us","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("43","Tammy Hitchcock","TammyRHitchcock@jourrapide.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("44","Lynne McCarthy","LynneEMcCarthy@rhyta.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("45","Michael Hankins","MichaelEHankins@einrot.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("46","Sammie Ketter","SammieMKetter@einrot.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("47","Bret Campbell","BretHCampbell@rhyta.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("48","Antonio Ware","AntonioRWare@fleckens.hu","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("49","Bonnie Walker","BonnieJWalker@fleckens.hu","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("50","Jeffrey Powell","JeffreyAPowell@gustr.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("51","Kimberly Stanton","KimberlyHStanton@dayrep.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("52","Dora Shaffer","DoraJShaffer@gustr.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("53","Jo Kuo","JoMKuo@teleworm.us","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("54","Andrew Loewen","AndrewDLoewen@jourrapide.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("55","Terry Fisher","TerryJFisher@dayrep.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("56","Samuel Hallmark","SamuelMHallmark@einrot.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("57","Ida Fontaine","IdaJFontaine@cuvox.de","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("58","Donna Brown","DonnaLBrown@gustr.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("59","Alejandro Malec","AlejandroMMalec@einrot.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("60","Shelley Felipe","ShelleyWFelipe@teleworm.us","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("61","Juan Whitaker","JuanSWhitaker@jourrapide.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("62","Charles Roundtree","CharlesKRoundtree@dayrep.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("63","Daryl Mueller","DarylMMueller@teleworm.us","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("64","Wilson Murrow","WilsonAMurrow@superrito.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("65","Richard Behrens","RichardLBehrens@rhyta.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("66","Carol Macklin","CarolJMacklin@jourrapide.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("67","Irene Brunelle","IreneDBrunelle@cuvox.de","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("68","Randy McBrayer","RandyBMcBrayer@einrot.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("69","Jaime Roth","JaimeMRoth@fleckens.hu","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("70","Angela Brekke","AngelaPBrekke@fleckens.hu","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("71","Rodolfo Hairston","RodolfoBHairston@jourrapide.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("72","Elliott Eng","ElliottNEng@cuvox.de","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("73","Phyllis Moreno","PhyllisPMoreno@einrot.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("74","Jesus Walden","JesusDWalden@teleworm.us","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("75","Adrian Trask","AdrianSTrask@armyspy.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("76","Margaret Richter","MargaretJRichter@jourrapide.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("77","Hubert Evans","HubertGEvans@superrito.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("78","Tonya Aiello","TonyaMAiello@fleckens.hu","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("79","Raymond Aguero","RaymondDAguero@superrito.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("80","Adria Morales","AdriaCMorales@armyspy.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("81","Alex Mejia","AlexTMejia@fleckens.hu","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("82","Travis Pickard","TravisSPickard@superrito.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("83","Jose Wax","JoseOWax@dayrep.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("84","Laura Duke","LauraRDuke@dayrep.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("85","Alessandra Hollingsworth","AlessandraMHollingsworth@dayrep.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("86","Wayne Johnston","WayneRJohnston@fleckens.hu","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("87","Craig Ostby","CraigHOstby@gustr.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("88","Rosa Watt","RosaJWatt@superrito.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("89","Claudio Campbell","ClaudioACampbell@rhyta.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("90","Arthur Santos","ArthurKSantos@teleworm.us","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("91","Robert Jacobs","RobertNJacobs@einrot.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("92","Martha Gambrell","MarthaDGambrell@superrito.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("93","Jennifer Evans","JenniferPEvans@fleckens.hu","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("94","Rose Barber","RoseRBarber@superrito.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("95","Alfred Castaneda","AlfredSCastaneda@jourrapide.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("96","William Bare","WilliamMBare@gustr.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("97","Oliver Hurley","OliverCHurley@cuvox.de","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("98","Joseph Williams","JosephJWilliams@einrot.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("99","Mark Cloer","MarkCCloer@superrito.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("100","Mario Benson","MarioRBenson@superrito.com","$2a$08$qaiW598ui44LGOxaEq9eT.1RxNcgd8uAGBQBjssiWjhGOgAe7RfW"), 
        ("101","Clark Kent","clark@superman.com","$2a$08$PmdAfn8IrN3eiXuBmXp4MeLe.Wgf1JcEpKuTQr1j6fdYw4az.TQpa"), 
        ("102","Eli Hanna","ehanna2@asu.edu","$2a$08$UFpVMXw1nvnzq0CUHT8ZX.7F1NE4L7yLJe3O5405PLNVZMeb8Ba1C");
        ';

        DB::select(DB::raw($sql));

    }
}

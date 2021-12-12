let error = true

let res = [
    db.createUser(
        {
            user: "genius",
            pwd: "darwin",
            roles: [
                {
                    role: "readWrite",
                    db: "darwin_inventors"
                }
            ]
        }
    ),
    db.darwin_inventors.drop(),
    db.darwin_inventors.createCollection('darwin_inventors'),
    db.darwin_inventors.insert({name: "William Nelson", domain:"Automobile", company: "General Electric", invention: "motoriser des bicyclettes", death_cause: "Est tombé d'un prototype durant un essai."}),
    db.darwin_inventors.insert({name: "Ismail ibn Hammad al-Jawhari", domain:"Aviation", death_date: "year 1003-1010", nationality: "Turc", death_cause: "A tenté de voler à l'aide de deux ailes en bois et d'une corde."}),
    db.darwin_inventors.insert({name: "Jean-François Pilâtre de Rozier", domain:"Aviation", death_date: "15 juin 1785", death_cause: "Crash aérien alors qu'il tente avec Pierre-Ange Romain de traverser la Manche en ballon."}),
    db.darwin_inventors.insert({name: "Otto Lilienthal", birthday: "1848", death_date: "1896", death_cause: "Meurt le lendemain d'un accident pendant lequel il s'écrase avec l'un de ses deltaplanes3."}),
    db.darwin_inventors.insert({name: "William Bullock", birthday: "1813", death_date: "1867", invention: "Améliore le principe des rotatives en remplaçant les feuilles par des bobines de papier", death_cause: "Son pied se retrouve écrasé lors de l'installation d'une nouvelle rotative à Philadelphie. Le pied développe une gangrène et Bullock meurt durant son amputation."}),
    db.darwin_inventors.insert({name: "Horace Lawson Hunley", death_date: "1863", domain:"Maritime", job: "Ingénieur naval confédéré", invention: "Premier sous-marin de combat", invention_name:"CSS H. L. Hunley", death_cause: "Il meurt au cours d'un exercice de routine du sous-marin."}),
    db.darwin_inventors.insert({name: "Karl Flach", birthday: "1821", death_date: "1866", domain:"Maritime", nationality:"Allemand", death_cause:"Coule avec le navire qui porte son nom, le Flach, en compagnie de son fils unique et de neuf membres d'équipage, lors d'un essai de plongée."}),
    db.darwin_inventors.insert({name: "Thomas Midgley Jr.", birthday: "1889", death_date: "1944", nationality:"Américain", job: "Ingénieur et chimiste", invention:"Système de ficelles et de poulies pour l'aider à se sortir du lit", death_cause:"C'est dans son montage qu'il a été retrouvé étranglé à l'âge de 55 ans."}),
    db.darwin_inventors.insert({name: "Marie Curie", birthday: "1867", death_date: "1934", domain: "Physique", nationality:"Française", invention:"Invente un procédé pour isoler le radium après avoir codécouvert les éléments radioactifs radium et polonium.", death_cause:"Elle meurt d'une anémie aplasique, conséquence d'une exposition prolongée aux radiations ionisantes émanant de ses recherches."}),
    db.darwin_inventors.insert({domain: "Physique", death_date: "Années 40", job:"Physiciens", death_cause:"Plusieurs physiciens ayant travaillé au développement de la bombe atomique au Laboratoire national de Los Alamos sont morts de l'exposition aux radiations."}),
    db.darwin_inventors.insert({name: "Max Valier", birthday: "1895", death_date: "1930", domain: "Astronautique", company:"Société astronautique allemande Verein für Raumschiffahrt", invention:"Fusée à combustible liquide", death_cause:"Un engin propulsé à l'alcool explose sur son banc d'essai, tuant Valier sur place.", death_place:"Berlin"}),
    db.darwin_inventors.insert({name: "Mike Hughes", death_date: "22 février 2020", death_cause:"Meurt dans le crash de sa fusée en voulant prouver que la Terre est plate.", stupidity_rate:"It's over 9000."}),
    db.darwin_inventors.insert({name: "Li Si", death_date: "208 avant J.C.", job:"Premier ministre durant la Dynastie Qin", invention:"Méthode d'exécution", invention_name:"Méthode des 5 douleurs", death_cause:"Est exécuté par la méthode qu'il avait lui-même mise au point"}),
    db.darwin_inventors.insert({name: "James Douglas", death_date: "1581", death_cause:"Est exécuté par la Maiden écossaise, un type de tranche-tête qu'il avait introduit en Écosse en tant que régent.", death_place:"Édimbourg"}),
    db.darwin_inventors.insert({name: "Valerian Abakovski", birthday: "1895", death_date: "1921", invention:"Aérowagon : un prototype d'autorail à grande vitesse propulsé par une hélice", death_cause:"Un groupe mené par Fiodor Sergueïev prend l'aérowagon à Moscou pour se rendre aux charbonnages de Toula, Abakovski est de la partie. Ils arrivent avec succès à Toula mais sur le chemin du retour, le véhicule déraille à haute vitesse tuant tout le monde à bord."})
]

printjson(res)

if (error) {
    print(error)
  print('Error, exiting')
  quit(1)
}
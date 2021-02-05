INSERT INTO ducks (regular_name, latin_name, description, conservation, location, extroversion, colourfulness, kindness, activeness)
VALUES ('Indian Runner Duck', 'Anas platyrhynchos domesticus', 'Timid but can be tamed. Lay lots of eggs and run fast. Origins in Indonesia', 'Least concern(?)', 'Europe, Asia, America, Africa, Australia', 4, 8, 6, 10);

INSERT INTO ducks (regular_name, latin_name, description, conservation, location, extroversion, colourfulness, kindness, activeness)
VALUES ('Muscovy Duck', 'Cairina moschata', 'Agile and speedy, aggressive (males more so). Adults may peck at babies.
', 'Least concern', 'America, Australia, Europe
', 6, 6, 3, 8);

INSERT INTO ducks (regular_name, latin_name, description, conservation, location, extroversion, colourfulness, kindness, activeness)
VALUES ('Mandarin Duck', 'Aix galericulata', 'Shy birds – seeks cover beneath overhanging trees and form smaller flocks. Can become tame from frequent interaction with humans. Greatest threat is habitat loss due to loggers. Traditional Chinese culture – believed to be lifelong couples and featured in Chinese art as a symbol of fidelity and loyal affection', 'Least concern', 'Asia, Europe, and North America', 3, 10, 7, 6);

INSERT INTO ducks (regular_name, latin_name, description, conservation, location, extroversion, colourfulness, kindness, activeness)
VALUES ('Eurasian Widgeon', 'Anas penelope', 'Dabbling duck. Forms large flocks, sometimes with the American wigeon and hybridise. Noisy. Male has clear whistle ‘pjiew pjiew’, female low growl ‘rawr’. Strongly migratory – ventures further south than its breeding range', 'Least concern', 'Africa, Asia, Europe, and rare in North America', 8, 4, 8, 10);

INSERT INTO ducks (regular_name, latin_name, description, conservation, location, extroversion, colourfulness, kindness, activeness)
VALUES ('Aylesbury Duck', 'Anas platyrhynchos domesticus', 'original white farm duck of europe. Early 1800s, would be walked 40 miles to market – feet covered in tar and sawdust for protection. Good natured, friendly, loud quack. Quite inactive, don’t forage. Often mistaken for the Pekin duck', 'Critical – The Livestock Conservancy', 'Europe, America', 9, 1, 8, 3);



const FrogDirectory = ({ regular_name, latin_name, description, conservation, location, extroversion, colourfulness, kindness, activeness }) => {
    <>
        <h3>{ {regular_name} AKA {  } }</h3>
    </>
}

const { regular_name, latin_name, description } = this.props;
return (
    <>
    <h1>Testing!</h1>
    <p>{ regular_name }</p>
    <p>{ description }</p>
    </>
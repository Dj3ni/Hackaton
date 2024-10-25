import axios from "axios";

const url ="http://localhost/api/Dialogs"

// function fetchData (){
//     axios.get(url).then(response =>{
//         console.log("hey",response);
//     })
// }
// fetchData()

function test(dialogs : string[], indexes : number[]) : void{
    
    try {
        const res = axios.get(
            'http://localhost:8000/api/dialogs'
        ).then(response=>{
            indexes.forEach(i => dialogs.push(response.data.member[i].text));
        });
    } catch (error) {
        console.log("Oups, je n'ai pas trouvé");
    }
}

function choice(choices :string[], indexes : number[]):void{
    console.log("test");
    try {
        const res = axios.get(
            'http://localhost:8000/api/choices'
        ).then(response=>{
            console.log(response.data.member[0].text);
            indexes.forEach(i => choices.push(response.data.member[i].text));
        });
    } catch (error) {
        console.log("Oups, je n'ai pas trouvé");
    }
}

export type Character = {
    name: string;
    dialogue: string[];
    url: string;
    choices: string[];
    };

    export const hiro: Character = {
    name: "Hiro King",
    dialogue: [
        // response.data.member[0].text,
        // response.data.member[1].text,
        // response.data.member[2].text,
        // response.data.member[3].text,
        // response.data.member[4].text,
        // response.data.member[5].text,
        // response.data.member[6].text,
        // response.data.member[7].text,
        // response.data.member[13].text,
        // response.data.member[16].text,
        // response.data.member[25].text,
    ],
    url: "",
    choices: [
        // "How does it work? ", "OK, let's do this!"
    ],
    };

    test(hiro.dialogue, [0,1,2,3,4,5,6,7,13,16,25]);
    choice(hiro.choices, [0,1]);

    export const agatha: Character = {
    name: "Agatha Clarke",
    dialogue: [
    //     response.data.member[8].text,
    //     response.data.member[9].text,
    //     response.data.member[10].text,
    //     response.data.member[11].text,
    //     response.data.member[12].text,
    //     response.data.member[14].text,
    //     response.data.member[15].text,
    //     response.data.member[17].text,
    //     response.data.member[18].text,
    //     response.data.member[19].text,
    //     response.data.member[20].text, //until 26
    ],
    url: "/assistant_happy.png",
    choices: [],
    };

    test(agatha.dialogue, [8,9,10,11,12,14,15,17,18,19,20,21,22,23,24,25,26])
    export const tableauIntroApi = [
    {
        name: "Hiro King",
        dialogue: 0,
        img: "",
    },
    { name: "Hiro King", dialogue: 1, img: "" },
    { name: "Hiro King", dialogue: 2, img: "" },
    { name: "Hiro King", dialogue: 3, img: "" },
    { name: "Hiro King", dialogue: 4, img: "" },
    { name: "Hiro King", dialogue: 5, img: "" },
    { name: "Hiro King", dialogue: 6, img: "" },
    { name: "Hiro King", dialogue: 7, img: "" },
    { name: "Hiro King", dialogue: 8, img: "" },
    { name: "Agatha Clarke", dialogue: 0, img: "/assistant_happy.png" },
    { name: "Agatha Clarke", dialogue: 1, img: "/assistant_normal.png" },
    { name: "Agatha Clarke", dialogue: 2, img: "/assistant_normal.png" },
    { name: "Agatha Clarke", dialogue: 3, img: "/assistant_happy.png" },
    { name: "Agatha Clarke", dialogue: 4, img: "/assistant_angry.png" },
    { name: "Hiro King", dialogue: 9, img: "" },
    { name: "Agatha Clarke", dialogue: 5, img: "/assistant_angry.png" },
    { name: "Agatha Clarke", dialogue: 6, img: "/assistant_normal.png" },
    { name: "Hiro King", dialogue: 10, img: "" },
    { name: "Agatha Clarke", dialogue: 7, img: "/assistant_happy.png" },
    { name: "Agatha Clarke", dialogue: 8, img: "/assistant_normal.png" },
    { name: "Agatha Clarke", dialogue: 9, img: "/assistant_normal.png" },
    { name: "Agatha Clarke", dialogue: 10, img: "/assistant_normal.png" },
    { name: "Agatha Clarke", dialogue: 11, img: "/assistant_happy.png" },
    { name: "Agatha Clarke", dialogue: 12, img: "/assistant_angry.png" },	
    { name: "Agatha Clarke", dialogue: 13, img: "/assistant_normal.png" },
    { name: "Agatha Clarke", dialogue: 14, img: "/assistant_normal.png" },
    { name: "Hiro King", dialogue: 11, img: "" },
    { name: "Agatha Clarke", dialogue: 15, img: "/assistant_happy.png" },
    ];
// import { Character } from "../intro/dialogue";
// import axios from "axios";

// const url ="http://localhost/api/Dialogs"

// function dialog(dialogs : string[], indexes : number[]) : void{
    
//     try {
//         const res = axios.get(
//             'http://localhost:8000/api/dialogs'
//         ).then(response=>{
//             indexes.forEach(i => dialogs.push(response.data.member[i].text));
//         });
//     } catch (error) {
//         console.log("Oups, je n'ai pas trouvé");
//     }
// }

// function choice(choices :string[], indexes : number[]):void{
//     console.log("test");
//     try {
//         const res = axios.get(
//             'http://localhost:8000/api/choices'
//         ).then(response=>{
//             console.log(response.data.member[0].text);
//             indexes.forEach(i => choices.push(response.data.member[i].text));
//         });
//     } catch (error) {
//         console.log("Oups, je n'ai pas trouvé");
//     }
// }

// export const hiro1: Character = {
//     name: "Hiro King",
//     dialogue: [
//         // "Is this old phone still working? ",
//         // "(I probably have to answer.) ",
//         // "Y… yes? (Wow, this guy sounds creepy…)",
//         // "Err…",
//         // "(What was that?)",
//         // "Aw. Err… Come in!",
//         // "... Hello?",
//     ],
//     url: "",
//     choices: ["We cannot ignore the emissions of IT CORP. Let's fund this project!","IT activities have nothing to do with CO₂ emissions.  I'd rather restrain air travel for the executives"],
// };

// dialog(hiro1.dialogue, [28,29,31,33,38,39,40])
// choice(hiro1.choices, [2,3]);

// export const mysterious: Character = {
//     name: "Mysterious Voice",
//     dialogue: [
//         "Hiro King?",
//         "Hiro King. So, you think you can replace the great James Arnold King Jr. as the head of IT CORP? ",
//         "Very interesting.",
//         "Let's see if you can handle that.",
//         "I will watch you.",
//         "Very carefully.",
//     ],
//     url: "",
//     choices: [],
// };

// dialog(mysterious.dialogue, [30,32,34,35,36,37])

// export const minako: Character = {
//     name: "Minako Parsnip",
//     dialogue: [
//         "Hmm...",
//         "Ah...",
//         "S… Sorry! Sorry to interrupt, Mr. King! I'm so sorry!",
//         "I am Minako Parsnip, from the Research Department.",
//         "I... I have a request.",
//         "Environmental activists complain on FrameBook about our company.",
//         "They ask us to offset the carbon footprints of our numerical activities. They want us to fund a reforestation project in Niger. What should we do?",
//         "Thank you for your time, sir!",
//         "I will pass on your directives!"
//     ],
//     url: "",
//     choices: [],
// };
// dialog(minako.dialogue,[41,42,43,44,45,46,47,48,49,50])

// export const sceneOne = [
//     {name: "Hiro King",dialogue: 0,img: "",},
//     { name: "Hiro King", dialogue: 1, img: "" },
//     { name: "Mysterious Voice", dialogue: 0, img: "" },
//     { name: "Hiro King", dialogue: 2, img: "" },
//     { name: "Mysterious Voice", dialogue: 1, img: "" },
//     { name: "Hiro King", dialogue: 3, img: "" },
//     { name: "Mysterious Voice", dialogue: 2, img: "" },
//     { name: "Mysterious Voice", dialogue: 3, img: "" },
//     { name: "Mysterious Voice", dialogue: 4, img: "" },
//     { name: "Mysterious Voice", dialogue: 5, img: "" },
//     { name: "Hiro King", dialogue: 4, img: "" },
//     { name: "Hiro King", dialogue: 5, img: "" },
//     { name: "Hiro King", dialogue: 6, img: "" },
//     { name: "Minako Parsnip", dialogue: 0, img: "/parsnip_normal 1.png" },
//     { name: "Minako Parsnip", dialogue: 1, img: "/parsnip_angry 1.png" },
//     { name: "Minako Parsnip", dialogue: 2, img: "/parsnip_normal 1.png" },
//     { name: "Minako Parsnip", dialogue: 3, img: "/parsnip_happy 1.png" },
//     { name: "Minako Parsnip", dialogue: 4, img: "/parsnip_normal 1.png" },
//     { name: "Minako Parsnip", dialogue: 5, img: "/parsnip_angry 1.png" },
//     { name: "Minako Parsnip", dialogue: 6, img: "/parsnip_normal 1.png" },
//     { name: "Minako Parsnip", dialogue: 7, img: "/parsnip_happy 1.png" },
//     { name: "Minako Parsnip", dialogue: 8, img: "/parsnip_happy 1.png" },
// ];

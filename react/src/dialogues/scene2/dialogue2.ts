export type Character = {
    name: string;
    dialogue: string[];
    url?: string;
    choices: string[];
};

export const hero: Character = {
    name: "Hiro King",
    dialogue: [
        "Is this old phone still working? ",
        "(I probably have to answer.) ",
        "Y… yes? (Wow, this guy sounds creepy…)",
        "Err…",
        "(What was that?)",
        "Aw. Err… Come in!",
        "... Hello?",
        
    ],
    url: "",
    choices: ["We cannot ignore the emissions of IT CORP. Let's fund this project!","IT activities have nothing to do with CO₂ emissions. I'd rather restrain air travel for the executives"],
};

export const mysterious: Character = {
    name: "Mysterious Voice",
    dialogue: [
        " Hiro King?",
        "Hiro King. So, you think you can replace the great James Arnold King Jr. as the head of IT CORP? ",
        "Very interesting.",
        "Let's see if you can handle that.",
        "I will watch you.",
        "Very carefully.",
    ],
    url: "",
    choices: [],
};

export const minako: Character = {
    name: "Minako Parsnip",
    dialogue: [
        "Hmm...",
        "Ah...",
        "S… Sorry! Sorry to interrupt, Mr. King! I'm so sorry!",
        "I am Minako Parsnip, from the Research Department.",
        "I... I have a request.",
        "Environmental activists complain on FrameBook about our company.",
        "They ask us to offset the carbon footprints of our numerical activities. They want us to fund a reforestation project in Niger. What should we do?",
        "Thank you for your time, sir!",
        "I will pass on your directives!"
    ],
    url: "",
    choices: [],
};

export const tableauIntro = [
    {
        name: "Hiro King",
        dialogue: 0,
        img: "",
    },
    { name: "Hiro King", dialogue: 1, img: "" },

    { name: "Mysterious Voice", dialogue: 0, img: "" },

    { name: "Hiro King", dialogue: 2, img: "" },

    { name: "Mysterious Voice", dialogue: 1, img: "" },

    { name: "Hiro King", dialogue: 3, img: "" },

    { name: "MysteriousVoice", dialogue: 2, img: "" },
    { name: "MysteriousVoice", dialogue: 3, img: "" },
    { name: "MysteriousVoice", dialogue: 4, img: "" },
    { name: "MysteriousVoice", dialogue: 5, img: "" },
    
    { name: "Hiro King", dialogue: 4, img: "" },
    { name: "Hiro King", dialogue: 5, img: "" },
    { name: "Hiro King", dialogue: 6, img: "" },

    { name: "Minako Parsnip", dialogue: 0, img: "/parsnip_normal 1.png" },
    { name: "Minako Parsnip", dialogue: 1, img: "/parsnip_angry 1.png" },
    { name: "Minako Parsnip", dialogue: 2, img: "/parsnip_normal 1.png" },
    { name: "Minako Parsnip", dialogue: 3, img: "/parsnip_happy 1.png" },
    { name: "Minako Parsnip", dialogue: 4, img: "/parsnip_normal 1.png" },
    { name: "Minako Parsnip", dialogue: 5, img: "/parsnip_angry 1.png" },
    { name: "Minako Parsnip", dialogue: 6, img: "/parsnip_normal 1.png" },
    { name: "Minako Parsnip", dialogue: 7, img: "/parsnip_happy 1.png" },
    { name: "Minako Parsnip", dialogue: 8, img: "/parsnip_happy 1.png" },
];

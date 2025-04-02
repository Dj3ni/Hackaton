export type Character = {
    name: string;
    dialogue: string[];
    url?: string;
    choices: string[];
};

export const hero: Character = {
    name: "Hiro King",
    dialogue: [
        "(Minako Parsnip.)",
        "(She seems quite dedicated to her job.)",
        "(I wonder if my father's other employees are as involved in sustainability as she is.)",
        "...",
        "... who are you? ",
        "(Wow! He's almost as scary as the guy on the phone!)",
    ],
    url: "",
    choices: ["Of course! The entire world must know how GREEN we have become!","Just change what's necessary. I don't want to waste it."],
};

export const verdatre: Character = {
    name: "Kevin Verdâtre",
    dialogue: [
        "...",
        "You will discover soon enough who I am… Mr. Hiro KING!",
        "The graphic designers of the Marketing Department need more powerful computers...",
        "/We can't create anything good with these DESPICABLY old machines.",
        "We kept them for two years after all.",
        "To show the world how GREEN we are, we need our advertising service to be FLAWLESS.",
        "Don't you agree, Mr. Hiro King?",
        "NEUTRAL/Fair enough. See you soon… Mr. Hiro King."
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
    { name: "Hiro King", dialogue: 2, img: "" },


    { name: "Kevin Verdâtre", dialogue: 0, img: "/verdatre_normal.png" },

    { name: "Hiro King", dialogue: 3, img: "" },
    { name: "Hiro King", dialogue: 4, img: "" },

    { name: "Kevin Verdâtre", dialogue: 1, img: "/verdatre_angry.png" },

    { name: "Hiro King", dialogue: 5, img: "" },

    { name: "Kevin Verdâtre", dialogue: 2, img: "/verdatre_normal.png" },
    { name: "Kevin Verdâtre", dialogue: 3, img: "/verdatre_angry.png" },
    { name: "Kevin Verdâtre", dialogue: 4, img: "/verdatre_normal.png" },
    { name: "Kevin Verdâtre", dialogue: 5, img: "/verdatre_angry.png" },
    { name: "Kevin Verdâtre", dialogue: 6, img: "/verdatre_happy.png" },
    { name: "Kevin Verdâtre", dialogue: 7, img: "/verdatre_normal.png" },

];

export type Character = {
  name: string;
  dialogue: string[];
  url: string;
  choices: string[];
};

export const hiro: Character = {
  name: "Hiro King",
  dialogue: [
    "A few days ago, I was only an intern here at IT CORP…",
    "My father, the CEO of the company, disappeared after a money laundering scandal.",
    "After that, the board decided to put me in charge. ",
    "How am I supposed to know what to do??? I was only the coffee boy until now! ",
    "Aaah!",
    "(What should I do?)",
    "<Inhales deeply.> ",
    "(OK, let’s do this.) ",
    "Come in! ",
    "Green directives? ",
    "But I don’t know anything about that…",
    "Alright then, let’s see… ",
  ],
  url: "",
  choices: ["How does it work? ", "OK, let’s do this!"],
};

export const agatha: Character = {
  name: "Agatha Clarke",
  dialogue: [
    " Mr. Hiro King?",
    "I am Agatha Clarke, executive assistant at IT CORP…",
    "The direction board mandated me to help your father, James A. King Jr, before he disappeared",
    "I am here to help you now.",
    "We need to talk about the Green directives at IT CORP, Mr Hiro.",
    "I’m sorry to bother you so early. I know that you are still adjusting to your new position…",
    "But the “Green” question has been ignored for far too long under the influence of your father. It’s time for you to change the way things work over here!",
    "Oh, don’t sell yourself short, Mr Hiro!",
    "I’m certain you will make the right choices.",
    "That’s simple. ",
    "A lot of people are concerned here about the future of our planet. ",
    "Listen to them and make the right decision.",
    "We want to work together on a better world!",
    "IT CORP has a lot of influence. Your choices might have consequences.",
    "My advice is to think carefully before you act.",
    "Thank you, Mr Hiro. I can already see what a great president you will become! ",
  ],
  url: "/assistant_happy.png",
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

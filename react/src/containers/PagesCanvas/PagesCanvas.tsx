import "./PagesCanvas.css";
import DialogueBox from "../DialogueBox/Dialoguebox";
import { useState } from "react";
import { agatha, hero, tableauIntro } from "../../dialogues/intro/dialogue";

const PageCanvas = ({onUpdateScene}: {onUpdateScene: (newScene: number) => void}) => {

	
	// const [{currentChara, index}, setState] = useState<{index: number, currentChara: Character}>({
	// 	currentChara: hero,
	// 	index: 0,
	// })

	// const changeState = ({index, character, url}: {index?: number, character?: Character, url?: string}) => {
	// 	setState(current => ({
	// 		...current,
	// 		index: index ?? current.index,
	// 		currentChara: {
	// 			...(character ?? current.currentChara), 
	// 			url: url ?? character?.url ?? current.currentChara.url,				
	// 		},
	// 	}))
	// }

	// console.log("state", {currentChara, index});

	// const updateState = (newChara: any, newIndex: number) => {
	// 	setState({
	// 		currentChara: newChara,
	// 		index: newIndex,
	// 	});
	// };
	

	// const displayDialogue = () => {
		
	// 	if (index === 8 && currentChara.name === "Hiro King") {
	// 		changeState({index: 0, character: agatha, url: "/assistant_normal.png"});
	// 		return
	// 	}
	// 	if (index === 9 && currentChara.name === "Hiro King") {
	// 		changeState({index: 5, character: agatha});
	// 		return
	// 	}
	// 	if (index === 10 && currentChara.name === "Hiro King") {
	// 		changeState({index: 7, character: agatha, url: "/assistant_happy.png"});
	// 		return
	// 	}

		
	// 	if (index === 0 && currentChara.name === "Agatha Clarke") {
	// 		changeState({index: 1, url: "/assistant_normal.png"});
	// 		return
	// 	}
	// 	if (index === 2 && currentChara.name === "Agatha Clarke") {
	// 		changeState({index: 3, character: agatha, url: "/assistant_happy.png"});
	// 		return
	// 	}
	// 	if (index === 3 && currentChara.name === "Agatha Clarke") {
	// 		changeState({index: 4, character: agatha, url: "/assistant_angry.png"});
	// 		return
	// 	}
	// 	if (index === 4 && currentChara.name === "Agatha Clarke") {
	// 		changeState({index: 9, character: hero});
	// 		return
	// 	}

	// 	if (index === 6 && currentChara.name === "Agatha Clarke") {
	// 		changeState({index: 10, character: hero});
	// 		return
	// 	}
	// 	if (index === 8 && currentChara.name === "Agatha Clarke") {
	// 		changeState({index: 9, character: agatha, url: "/assistant_normal.png"});
	// 		return
	// 	}
	// 	if (index === 11 && currentChara.name === "Agatha Clarke") {
	// 		changeState({index: 12, character: agatha, url: "/assistant_happy.png"});
	// 		return
	// 	}

	// 	if (index === 12 && currentChara.name === "Agatha Clarke") {
	// 		changeState({index: 12, character: agatha, url: "/assistant_angry.png"});
	// 		return
	// 	}

	// 	if (index === 13 && currentChara.name === "Agatha Clarke") {
	// 		changeState({index: 14, character: agatha, url: "/assistant_normal.png"});
	// 		return
	// 	}
	// 	if (index === 14 && currentChara.name === "Agatha Clarke") {
	// 		changeState({index: 11, character: hero});
	// 		return
	// 	}

	// 	setState((state) => ({...state, index: state.index + 1}));
	// };
	const [progress, setProgress] = useState(0);
	const updateProgress = (newProgress: number) => {
		setProgress(newProgress);
	}

	const getDialogue = () => {
		
		const currentDialogue = tableauIntro[progress].dialogue
		if(tableauIntro[progress].name === "Hiro King") {
			 return hero.dialogue[currentDialogue]
			
		}
		if(tableauIntro[progress].name === "Agatha Clarke") {
			
			 return agatha.dialogue[currentDialogue]
			
		}

		
		return ""
	};
	console.log(progress);
	
	
	
	

	const shouldDisplayChoices = progress === 19 && tableauIntro[progress].name === "Agatha Clarke";
	

	return (
		<main className="main" onClick={() => {
			if(!shouldDisplayChoices && progress < tableauIntro.length - 1) {
				setProgress(progress + 1);
			}
			if(progress === tableauIntro.length - 1){
				onUpdateScene(1)
			}
		}} >
			{progress === 3 && tableauIntro[progress].name === "Hiro King" ? (
				<p className="door">Knock Knock</p>
			) : null}

			{shouldDisplayChoices ? (
				<Choices
					sceneChoices={hero.choices}
					onUpdateState={updateProgress}
					
				/>
			) : null}

			<img className="sprite" src={tableauIntro[progress].img} alt="" />
			<section className="content"></section>
			<p className="CharaName">{tableauIntro[progress].name}</p>
			<section className="dialogue">
				<DialogueBox text={getDialogue()} />
			</section>
		</main>
	);
};

export default PageCanvas;

const Choices = ({
	sceneChoices,
	onUpdateState,
	
}: {
	sceneChoices: string[];
	onUpdateState: ( index: number) => void;
	
}) => {
	const selectChoice = (index: number) => {
		if (index === 1) {
			onUpdateState(26);
		} else {
			console.log("click");
			
			onUpdateState(20);
		}
	};
	

	const displayChoices = sceneChoices.map((choice: string, index: number) => (
		<button
			key={index}
			className="choiceBtn"
			onClick={() => selectChoice(index)}
		>
			{index} {choice}
		</button>
	));

	return <div className="choices">{displayChoices}</div>;
};

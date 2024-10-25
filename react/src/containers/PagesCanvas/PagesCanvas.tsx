import "./PagesCanvas.css";
import { useState } from "react";
import { Character } from "../../dialogues/intro/dialogue";
import DialogueBox from "../DialogueBox/Dialoguebox";

const PageCanvas = ({
	hiro,
	pnj,
	mysterious,
	scenArray,
	currentScene,
	onUpdateScene,
	onUpdateGoodScore,
	onUpdateBadScore,
}: {
	hiro: Character;
	pnj: Character;
	mysterious?: Character;
	currentScene: number;
	scenArray: { name: string; img: string; dialogue: number }[];
	onUpdateScene: (newScene: number) => void;
	onUpdateGoodScore?: (newScore: number) => void;
	onUpdateBadScore?: (newScore: number) => void;
}) => {
	const [progress, setProgress] = useState(0);

	const updateProgress = (newProgress: number) => {
		setProgress(newProgress);
	};

	const getDialogue = () => {
		const currentDialogue = scenArray[progress].dialogue;
		if (scenArray[progress].name === "Hiro King") {
			return hiro.dialogue[currentDialogue];
		}
		if (scenArray[progress].name === "Agatha Clarke") {
			return pnj.dialogue[currentDialogue];
		}
		if (scenArray[progress].name === "Mysterious Voice" && mysterious) {
			return mysterious.dialogue[currentDialogue];
		}
		if (scenArray[progress].name === "Minako Parsnip") {
			return pnj.dialogue[currentDialogue];
		}

		return "";
	};

	const shouldDisplayChoices =
		currentScene === 0 &&
		progress === 19 &&
		scenArray[progress].name === "Agatha Clarke";

	const answerSceneOne =
		currentScene === 1 &&
		progress === 19 &&
		scenArray[progress].name === "Minako Parsnip";

	console.log(progress);

	return (
		<main
			className="main"
			onClick={() => {
				if (
					!shouldDisplayChoices &&
					!answerSceneOne &&
					progress < scenArray.length - 1
				) {
					setProgress(progress + 1);
				}

				if (progress === scenArray.length - 1) {
					onUpdateScene(currentScene + 1);
				}
			}}
		>
			{progress === 3 &&
			scenArray[progress].name === "Hiro King" &&
			currentScene === 0 ? (
				<p className="door">Knock Knock</p>
			) : null}

			{shouldDisplayChoices ? (
				<Choices sceneChoices={hiro.choices} onUpdateState={updateProgress} />
			) : null}
			{answerSceneOne ? (
				<Choices
					sceneChoices={hiro.choices}
					onUpdateGoodScore={onUpdateGoodScore}
					onUpdateBadScore={onUpdateBadScore}
					onUpdateState={updateProgress}
				/>
			) : null}

			<img className="sprite" src={scenArray[progress].img} alt="" />
			<section className="content"></section>
			<p className="CharaName">{scenArray[progress].name}</p>
			<section className="dialogue">
				<DialogueBox text={getDialogue()} />
			</section>
			<audio controls loop>
				<source src="/sound/MainMusic.wav" type="audio/wav"></source>
			</audio>
		</main>
	);
};

// function MyButton(){
// 	const [playSound] = useSound(src)

// 	return (
// 	  <button onClick={() => playSound()}>
// 		 Play Sound
// 	  </button>
// 	)
//   }

export default PageCanvas;

const Choices = ({
	sceneChoices,
	onUpdateState,
	onUpdateGoodScore,
	onUpdateBadScore,
}: {
	sceneChoices: string[];
	onUpdateState?: (index: number) => void;
	onUpdateGoodScore?: (newScore: number) => void;
	onUpdateBadScore?: (newScore: number) => void;
}) => {
	const selectChoice = (index: number) => {
		if (onUpdateState) {
			if (index === 1) {
				onUpdateState(26);
			} else {
				onUpdateState(20);
			}
			if (onUpdateGoodScore && onUpdateState && onUpdateBadScore) {
				if (index === 0) {
					onUpdateGoodScore(+1);
				} else {
					onUpdateBadScore(+1);
				}
				onUpdateState(20);
			}
		}
	};

	const displayChoices = sceneChoices.map((choice: string, index: number) => (
		<button
			key={index}
			className="choiceBtn"
			onClick={() => selectChoice(index)}
		>
			{choice}
		</button>
	));

	return <div className="choices">{displayChoices}</div>;
};

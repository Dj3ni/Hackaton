import { useState } from "react";
import "./App.css";
import PageCanvas from "./containers/PagesCanvas/PagesCanvas";
import { agatha, hiro, tableauIntro } from "./dialogues/intro/dialogue";
import {
	minako,
	mysterious,
	sceneOne,
	hiro1,
} from "./dialogues/scene2/dialogue2";
import BadEnd from "./components/BadEnd/BadEnd";

import GoodEnd from "./components/GoodEnd/GoodEnd";
import axios from "axios";

function App() {
	const [scene, setScene] = useState(0);
	const [goodScore, setGoodScore] = useState(0);
	const [badScore, setBadScore] = useState(0);

	const updateScene = (newScene: number) => {
		setScene(newScene);
	};

	const onUpdateGoodScore = (newScore: number) => {
		setGoodScore(newScore);
	};

	const onUpdateBadScore = (newScore: number) => {
		setBadScore(newScore);
	};

	console.log("score", goodScore, badScore);
	console.log("scene", scene);

	return (

		<>
			{scene === 0 ? (
				<PageCanvas
					onUpdateScene={updateScene}
					hiro={hiro}
					pnj={agatha}
					currentScene={scene}
					scenArray={tableauIntro}
				/>
			) : null}
			{scene === 1 ? (
				<PageCanvas
					hiro={hiro1}
					pnj={minako}
					currentScene={scene}
					scenArray={sceneOne}
					mysterious={mysterious}
					onUpdateScene={updateScene}
					onUpdateGoodScore={onUpdateGoodScore}
					onUpdateBadScore={onUpdateBadScore}
				/>
			) : null}
			{badScore > goodScore && scene === 2 ? (
				<BadEnd />
			) : goodScore > badScore && scene === 2 ? (
				<GoodEnd
					onUpdateGoodScore={onUpdateGoodScore}
					onUpdateBadScore={onUpdateBadScore}
					onUpdateScene={updateScene}
				/>
			) : null}
		</>
	);
}

export default App;

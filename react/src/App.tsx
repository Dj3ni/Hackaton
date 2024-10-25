import { useState } from "react";
import "./App.css";
import PageCanvas from "./containers/PagesCanvas/PagesCanvas";
import { agatha, hiro, tableauIntro } from "./dialogues/intro/dialogue";
import { tableauIntroApi } from "./dialogues/intro/dialogApi";
import {
	minako,
	mysterious,
	sceneOne,
	hiro1,
} from "./dialogues/scene2/dialogue2";
import BadEnd from "./components/BadEnd/BadEnd";

import GoodEnd from "./components/GoodEnd/GoodEnd";
import Credits from "./components/Credits/Credits";
import axios from "axios";


function App() {
	const [scene, setScene] = useState(0);
	const [goodScore, setGoodScore] = useState(0);
	const [badScore, setBadScore] = useState(0);
	const [showCredits, setShowCredits] = useState(false);

	const updateScene = (newScene: number) => {
		setScene(newScene);
	};

	const onUpdateGoodScore = (newScore: number) => {
		setGoodScore(newScore);
	};

	const onUpdateBadScore = (newScore: number) => {
		setBadScore(newScore);
	};

	const handleEnd = () => {
		setShowCredits(true);
	};
	console.log(showCredits);

	// function test(dialogs : string[], indexes : number[]) : void{
	// 	console.log("test");
	// 	try {
	// 		const res = axios.get(
	// 			'http://localhost:8000/api/dialogs'
	// 		).then(response=>{
	// 			console.log(response.data);
	// 			console.log(response.data.member[0].text);
	// 			indexes.forEach(i => dialogs.push(response.data.member[i].text));
	// 		});
	// 	} catch (error) {
	// 		console.log("Oups, je n'ai pas trouvé");
	// 	}
	// }
	function fetchData (){
		axios.get('http://localhost:8000/api/dialogs').then(response =>{
			console.log("hey");
			console.log(response.data);
		})
	}
	fetchData()

	return (
		<>
			{showCredits ? (
				<Credits
					onUpdateScene={updateScene}
					onUpdateGoodScore={onUpdateGoodScore}
					onUpdateBadScore={onUpdateBadScore}
				/>
			) : null}
			{scene === 0 ? (
				<PageCanvas
					onUpdateScene={updateScene}
					hiro={hiro}
					pnj={agatha}
					currentScene={scene}
					scenArray={tableauIntroApi}
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
				<GoodEnd onEnd={handleEnd} />
			) : null}
		</>
	);
}

export default App;

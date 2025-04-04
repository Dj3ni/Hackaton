import { useState } from "react";
import "./credits.css";

const Credits = ({
	onUpdateGoodScore,
	onUpdateBadScore,
	onUpdateScene,
}: {
	onUpdateGoodScore: (newScore: number) => void;
	onUpdateBadScore: (newScore: number) => void;
	onUpdateScene: (newScene: number) => void;
}) => {
	const [creditsIndex, setCreditsIndex] = useState(0);
	const creditsArray = ["/Credits.png", "/Credits2.png"];

	const resetGame = () => {
		onUpdateGoodScore(0);
		onUpdateBadScore(0);
		onUpdateScene(0);
		window.location.reload();
	};
	return (
		<>
			<section
				onClick={() => {
					if (creditsIndex < creditsArray.length - 1) {
						setCreditsIndex(creditsIndex + 1);
					}
				}}
			>
				<img src={creditsArray[creditsIndex]} alt="noms des dev" />
				{creditsIndex === creditsArray.length - 1 ? (
					<button className="btngd" onClick={resetGame}>
						Quitter le jeu
					</button>
				) : null}
			</section>
		</>
	);
};

export default Credits;

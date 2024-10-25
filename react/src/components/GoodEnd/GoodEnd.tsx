import "./GoodEnd.css";
const GoodEnd = ({
	onUpdateGoodScore,
	onUpdateBadScore,
	onUpdateScene,
}: {
	onUpdateGoodScore: (newScore: number) => void;
	onUpdateBadScore: (newScore: number) => void;
	onUpdateScene: (newScene: number) => void;
}) => {
	const resetGame = () => {
		onUpdateGoodScore(0);
		onUpdateBadScore(0);
		onUpdateScene(0);
		window.location.reload();
	};

	return (
		<main className="goodEnd">
			<p className="textgd">
				Thanks to your decisions, you have saved the world!
			</p>

			<button className="btngd" onClick={resetGame}>
				Quitter le jeu
			</button>
		</main>
	);
};

export default GoodEnd;

import "./GoodEnd.css";
const GoodEnd = () => {
	// const resetGame = () => {
	// 	window.location.reload();
	// };
	return (
		<main className="goodEnd">
			<p className="text">
				Thanks to your decisions, you have saved the world !
			</p>

			<button className="btn">Quitter le jeu</button>
		</main>
	);
};

export default GoodEnd;

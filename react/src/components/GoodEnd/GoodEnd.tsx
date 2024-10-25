import "./GoodEnd.css";
const GoodEnd = ({ onEnd }: { onEnd: () => void }) => {
	return (
		<main className="goodEnd">
			<p className="textgd">
				Thanks to your decisions, you have saved the world!
			</p>

			<button onClick={onEnd} className="btngd">
				View Credits
			</button>
		</main>
	);
};

export default GoodEnd;

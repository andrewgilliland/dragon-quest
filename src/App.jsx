import { useState } from "react";

function App() {
  const [count, setCount] = useState(0);

  return (
    <>
      <div></div>
      <h1>Play</h1>
      <div className="card">
        <button
          className="rounded bg-blue-600 px-3 py-2 text-white hover:bg-blue-700"
          onClick={() => setCount((count) => count + 1)}
        >
          count is {count}
        </button>
        <p>
          Edit <code>src/App.jsx</code> and save to test HMR
        </p>
      </div>
      <p className="read-the-docs">
        Click on the Vite and React logos to learn more
      </p>
    </>
  );
}

export default App;

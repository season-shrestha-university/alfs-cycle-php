function getOpeningStatus() {
  const now = new Date();
  const day = now.getDay(); // 0 = Sunday, 6 = Saturday
  const currentMinutes = now.getHours() * 60 + now.getMinutes();

  const schedule = {
    1: { open: 9 * 60, close: 18 * 60 }, // Monday
    2: { open: 9 * 60, close: 18 * 60 },
    3: { open: 9 * 60, close: 18 * 60 },
    4: { open: 9 * 60, close: 18 * 60 },
    5: { open: 9 * 60, close: 18 * 60 },
    6: { open: 10 * 60, close: 16 * 60 }, // Saturday
    0: null, // Sunday closed
  };

  const today = schedule[day];

  function formatTime(minutes) {
    const h = Math.floor(minutes / 60);
    const m = minutes % 60;
    return `${h}:${m.toString().padStart(2, "0")}`;
  }

  if (!today) {
    return "Closed now";
  }

  if (currentMinutes >= today.open && currentMinutes < today.close) {
    return `Open now: ${formatTime(today.open)} - ${formatTime(today.close)}`;
  } else {
    return "Closed now";
  }
}

// Example usage:
document.getElementById("status").textContent = getOpeningStatus();

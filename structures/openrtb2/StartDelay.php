<?php

// 5.12 Start Delay
//
// Various options for the video or audio start delay.
// If the start delay value is greater than 0, then the position is mid-roll and the value indicates the start delay.
// type StartDelay int64
class StartDelay
{
    // > 0 Mid-Roll (value indicates start delay in second)
    // StartDelayPreRoll         StartDelay = 0  // Pre-Roll
    // StartDelayGenericMidRoll  StartDelay = -1 // Generic Mid-Roll
    // StartDelayGenericPostRoll StartDelay = -2 // Generic Post-Roll
}